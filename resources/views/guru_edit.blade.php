@extends('adminlte')
@section('content')
<section class="section">
<div class="section-header">
<h1>Guru Pages</h1>
</div>
<div class="card">
    <div class="card-header">
        <h4>Edit Guru</h4>
    </div>
    <div class="card-body">
        <a href="{{ route('guru.index') }}" class="btn btn-default">Kembali</a>
        <br><br>

        <form action="{{ route('guru.update', $guru->id ) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>NIP</label>
            <input name="nip" type="text" class="form-control" placeholder="..." value="{{ $guru->nip }}">
            @error('nip')
            <p>{{ $message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Nama Guru</label>
            <input name="namaguru" type="text" class="form-control"
            placeholder="..." value="{{ $guru->namaguru }}">
            @error('namaguru')
            <p>{{ $message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Mapel</label>
            <input name="mapel" type="text" class="form-control"
            placeholder="..." value="{{ $guru->mapel }}">
            @error('mapel')
            <p>{{ $message}}</p>
            @enderror
        </div>
        <input type="submit" name="submit" class="btn btn-success" value="Edit" />
    </form>
      


    </div>
</div>
</section>
@endsection("content")