<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class DokumentasiKegiatanController extends Controller
{
    public function index()
    {
        $data = Activity::all();
        return view('dokumentasikegiatan', ['activity' => $data]);
    }
}
