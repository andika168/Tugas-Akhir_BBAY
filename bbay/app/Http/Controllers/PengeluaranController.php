<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $data = Keuangan::where('jenis', 'Pengeluaran')->get();
        $total = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pemasukan')->sum('jumlah');
        $total_pengeluaran = Keuangan::where('status', Keuangan::STATUS_VERIFIED)->where('jenis', 'Pengeluaran')->sum('jumlah');
        $saldo = $total - $total_pengeluaran;
        return view('adminpengeluaran', ['keuangan' => $data, 'total' => $total, 'saldo' => $saldo, 'total_pengeluaran' => $total_pengeluaran]);
    }
    public function create()
    {
        return view('pengeluaran');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'jumlah' => 'numeric|min:1|required',
            'bukti' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required|min:5',
        ]);
        $data = Keuangan::where('jenis', 'Pengeluaran')->get();
        $total = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pemasukan')->sum('jumlah');
        $total_pengeluaran = Keuangan::where('status', Keuangan::STATUS_VERIFIED)->where('jenis', 'Pengeluaran')->sum('jumlah');
        $saldo =  $total - $total_pengeluaran;
        // dd($saldo, $request->jumlah);
        if ($saldo < $request->jumlah) {
            session()->flash('error_input_pengeluaran', "Pengeluaran Melebihi Total Saldo Yang Dimiliki");
            return redirect()->back()->withInput($request->input());
        }
        $image = $request->file('bukti');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('bukti_pengeluaran'), $imageName);

        $data = $request->only(['nama', 'jumlah', 'keterangan']);
        $data['bukti'] = 'bukti_pengeluaran/' . $imageName;
        $data['jenis'] = 'Pengeluaran';
        $data['id_trx'] = 'OUT-' . time();
        $data['status'] = Keuangan::STATUS_VERIFIED;

        Keuangan::create($data);
        return redirect()->route('data_pengeluaran');
    }
}
