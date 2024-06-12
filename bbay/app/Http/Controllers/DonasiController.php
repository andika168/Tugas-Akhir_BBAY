<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DonasiController extends Controller
{
    public function index()
    {
        return view('donasi');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'nama' => '',
            'jumlah' => 'numeric|min:0',
            'bukti' => 'mimes:jpg,bmp,png',
        ]);
        $file = $request->file('bukti');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'bukti_donasi';
        $file->move($tujuan_upload, $nama_file);
        $donasi = Keuangan::create([
            'id_trx' => 'DONE-' . time(),
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'bukti' => $tujuan_upload . "/" . $nama_file,
            'keterangan' => 'Donasi ' . 'DONASI BBAY PART 65',
            'jenis' => 'Pemasukan',
        ]);
        Session::flash('sukses', true);
        return redirect('/laporan');
    }
}
