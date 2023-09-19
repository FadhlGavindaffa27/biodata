@extends('adminlte')
@section('content')
<section class="section">
<div class="section-header">
<h1>Guru Pages</h1>
</div>
<div class="card">
    <div class="card-header">
        <h4>Tambah Data Guru</h4>
    </div>
    <div class="card-body">
        <a href="{{ route('guru.index') }}" class="btn btn-default">Kembali</a>
        <br><br>

        <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>NIP</label>
            <input name="nip" type="text" class="form-control"
            placeholder="...">
            @error('nip')
            <p>{{ $message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input name="namaguru" type="text" class="form-control"
            placeholder="...">
            @error('guru')
            <p>{{ $message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Mapel</label>
            <input name="mapel" type="text" class="form-control"
            placeholder="...">
            @error('mapel')
            <p>{{ $message}}</p>
            @enderror
        </div>


        <input type="submit" name="submit" class="btn btn-success" value="Tambah" />
    </form>
      


    </div>
</div>
</section>
@endsection("content")