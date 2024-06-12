<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LaporanKeuanganController extends Controller
{
    public function index()
    {
        $data = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->get();
        $total = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pemasukan')->sum('jumlah');
        $total_pengeluaran = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pengeluaran')->sum('jumlah');
        $saldo = $total - $total_pengeluaran;

        return view('laporankeuangan', ['keuangan' => $data, 'total' => $total, 'saldo' => $saldo, 'total_pengeluaran' => $total_pengeluaran]);
    }

    public function in()
    {
        $data = Keuangan::where('jenis', 'Pemasukan')->get();
        $total = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pemasukan')->sum('jumlah');
        $total_pengeluaran = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pengeluaran')->sum('jumlah');
        $saldo = $total - $total_pengeluaran;

        return view('laporanpemasukan', ['keuangan' => $data, 'total' => $total, 'saldo' => $saldo, 'total_pengeluaran' => $total_pengeluaran]);
    }
    public  function out()
    {
        $data = Keuangan::where('jenis', 'Pengeluaran')->get();
        $total = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pemasukan')->sum('jumlah');
        $total_pengeluaran = Keuangan::where('status', '!=', Keuangan::STATUS_REJECTED)->where('jenis', 'Pengeluaran')->sum('jumlah');
        $saldo = $total - $total_pengeluaran;
        return view('laporanpengeluaran', ['keuangan' => $data, 'total' => $total, 'saldo' => $saldo, 'total_pengeluaran' => $total_pengeluaran]);
    }
}
