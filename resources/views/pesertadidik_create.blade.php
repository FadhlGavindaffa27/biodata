@extends('adminlte')
@section('content')
<section class="section">
<div class="section-header">
<h1>Peserta Didik Pages</h1>
</div>
<div class="card">
    <div class="card-header">
        <h4>Tambah Data Peserta Didik</h4>
    </div>
    <div class="card-body">
        <a href="{{ route('pesertadidik.index') }}" class="btn btn-default">Kembali</a>
        <br><br>

        <form action="{{ route('pesertadidik.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>NIS</label>
            <input name="nis" type="text" class="form-control"
            placeholder="...">
            @error('nis')
            <p>{{ $message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input name="namalengkap" type="text" class="form-control"
            placeholder="...">
            @error('namalengkap')
            <p>{{ $message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
                <option>-Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
            @error('jk')
            <p>{{ $message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Nilai</label>
            <input name="nilai" type="number" class="form-control"
            placeholder="...">
            @error('namalengkap')
            <p>{{ $message}}</p>
            @enderror
        </div>

        <input type="submit" name="submit" class="btn btn-success" value="Tambah" />
    </form>
      


    </div>
</div>
</section>
@endsection("content")