<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminkeuanganController extends Controller
{
    public function index()
    {
        //dd(Keuangan::find(24)->user);
        $data = Keuangan::all();
        $total = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pemasukan')->sum('jumlah');
        $total_pengeluaran = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pengeluaran')->sum('jumlah');
        $saldo = $total - $total_pengeluaran;
        return view('adminkeuangan', ['keuangan' => $data, 'total' => $total, 'saldo' => $saldo, 'total_pengeluaran' => $total_pengeluaran]);
    }
    public function create()
    {
        $data = Keuangan::where('jenis', 'Pemasukan')->get();
        $total = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pemasukan')->sum('jumlah');
        return view('adminpemasukan', ['keuangan' => $data, 'total' => $total]);
    }
    public function verified($id)
    {
        $data = Keuangan::find($id);
        $data->status = Keuangan::STATUS_VERIFIED;
        $data->save();

        return redirect()->back();
    }
    public function rejected($id)
    {
        $data = Keuangan::find($id);
        $data->status = Keuangan::STATUS_REJECTED;
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data = Keuangan::find($id);
        $data->status = Keuangan::STATUS_CANCELED;
        $data->save();
        return redirect()->back();
    }
    public function update($id)
    {
        $data = Keuangan::find($id);
        return view('editpemasukan', ['data' => $data]);
    }
    public function update_pemasukan(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required',
            'remarks' => 'required',
        ]);

        $data = Keuangan::find($id);
        $data->dirubah_oleh = Auth::id();
        $data->jumlah = $request->jumlah;
        $data->remarks = $request->remarks;
        $data->save();

        return redirect()
            ->route('adminkeuangan');
    }
}
