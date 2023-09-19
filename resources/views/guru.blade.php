@extends('adminlte')
@section('content')
<section class="section">
<div class="section-header">
<h1>Guru Pages</h1>
</div>
<div class="card">
    <div class="card-header">
        <h4>Title</h4>
    </div>
    <div class="card-body">
        @if($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
        @endif
        <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah Data</a>
        <table class="table table-striped table-bordered">
            <tr>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Mapel</th>
                <th>Aksi</th>
            </tr>
            @foreach ($guruM as $guru)
            <tr>
                <td>{{ $guru->nip }}</td>
                <td>{{ $guru->namaguru }}</td>
                <td>{{ $guru->mapel }}</td>
                <td>
                    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-xs btn-warning">Edit</a>
                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>


    </div>
</div>
</section>
@endsection("content")