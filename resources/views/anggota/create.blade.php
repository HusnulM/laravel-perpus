@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Tambah Data Anggota</h1>
            <hr class="my-4">     

            <form action="/anggota" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama" name="nama_anggota" placeholder="Nama Anggota" value="{{ old('nama_anggota') }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anggota" value="{{ old('alamat') }}">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="no_telp">No. HP</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="NO. HP" value="{{ old('no_telp') }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection