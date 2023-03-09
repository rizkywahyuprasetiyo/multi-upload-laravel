@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-8">
        @if(session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card shadow px-3 py-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Project.</h3>
                <a href="{{ route('project.tambah') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Project</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dataProject as $index => $project)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $project->nama }}</td>
                        <td>{{ $project->lokasi }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-1">
                                <a href="{{ route('project.edit', $project->id) }}" class="btn btn-sm btn-success">Edit</a>
                                <form action="{{ route('project.hapus', $project->id) }}" method="post" onsubmit="return confirm(' Data akan dihapus, lanjutkan?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection