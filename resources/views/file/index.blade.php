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
                <h3>File.</h3>
                <form action="{{ route('file.simpan', $project->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="form-control" name="file[]" multiple id="file" onchange="this.form.submit()">
                    @error('file')
                    <div class=" text-danger mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </form>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama File</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dataFile as $file)
                    <tr>
                        <td><a href="{{ Storage::url($file->path) }}" class="btn-link" target="_blank">{{ $file->nama_file }}</a></td>
                        <td>
                            <div class="d-flex gap-1">
                                <div>
                                    <a href="{{ route('file.edit', [$project->id, $file->id]) }}" class="btn btn-sm btn-success">Edit</a>
                                </div>
                                <div>
                                    <form action="{{ route('file.hapus', $file->id) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </div>
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