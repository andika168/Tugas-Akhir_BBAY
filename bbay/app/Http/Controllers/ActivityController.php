<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = activity::all();
        return view('uploadfoto', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'nama' => '',
            'photo' => 'mimes:jpg,bmp,png,|max:2048',
            'description' => '',
        ]);
        $file = $request->photo;
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'kegiatan';
        $file->move($tujuan_upload, $nama_file);
        $donasi = Activity::create([
            'nama' => $request->nama,
            'photo' => $tujuan_upload . "/" . $nama_file,
            'description' => $request->description,
        ]);
        Session::flash('sukses', true);
        return redirect('/upload');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'description' => 'required',
    //     ]);

    //     $imageName = time() . '.' . $request->photo->extension();
    //     $request->photo->move(public_path('images'), $imageName);

    //     Activity::create([
    //         'photo' => $imageName,
    //         'description' => $request->description,
    //     ]);

    //     return back()
    //         ->with('success', 'You have successfully upload image.')
    //         ->with('image', $imageName);
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $foto_aktifitas = Activity::find($id);
        return view('editfoto', compact('foto_aktifitas'));
        // dd($foto_aktifitas);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|max:255',
            'photo' => 'required|mimes:jpg,bmp,png,jpeg|max:2048',
            'description' => 'required',
        ]);
        $activity = Activity::find($id);
        $activity->nama = $request->get('nama');
        $activity->description = $request->get('description');

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'kegiatan';
            $file->move($tujuan_upload, $nama_file);
            $activity->photo = $tujuan_upload . "/" . $nama_file;
        }

        $activity->save();
        Session::flash('success_edit', true);
        return redirect('/upload');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        Session::flash('success_delete', true);
        return redirect('/upload');
    }
}
