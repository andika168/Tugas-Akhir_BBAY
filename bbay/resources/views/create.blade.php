@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="card mt-8 form-container">
        <div class="card-header mb-5 pb-0 text-left bg-transparent">
            <h1 class="position-absolute"><span class="font-weight-bolder text-title grd-steelblue ">Login</span>👇</h1>
        </div>
        <div class="card-body mt-5">
            <div class="mt-5 mt-lg-4">
                <h2>Tambah User Baru</h2>

                <form method="post" action="{{ url('user') }}">
                    @csrf
                    <div class="row mb-4">
                        <div class="row justify-content">
                            <label>Username:</label>
                            <input type="text" name="username">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-4">
                        <div class="row justify-content">
                            <label>Password:</label>
                            <input type="password" name="password">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-4">
                        <div class="row justify-content">
                            <label>Nama:</label>
                            <input type="text" name="nama">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-4">
                        <div class="row justify-content">
                            <div class="">
                                <div>
                                    <button type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="row mb-4" method="post" action="user-add">
                    @csrf
                    <div class="row mb-4">
                        <div class="row justify-content">
                            <label class="col-sm-3 col-form-label" for="username">Username : </label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" required>
                        </div>
                    </div>
                    <br>
                    <div class="row mb-4">
                        <div class="row justify-content">
                            <label class="col-sm-3 col-form-label" for="password">Password : </label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                        </div>
                    </div>
                    <br>
                    <div class="row mb-4">
                        <div class="row justify-content">
                            <label class="col-sm-3 col-form-label" for="nama">Nama : </label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
                        </div>
                    </div>
                    <br>
                    <div class="row mb-4">
                        <div class="row justify-content">
                            <div class="">
                                <div>
                                    <button type="submit" class="btn bg-grd-steelblue w-100 mt-4 mb-0">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end col -->
    </div>
</div>
@endsection