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
                        <th scope="col">No</th>
                        <th scope="col">Nama Project</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dataFile as $index => $dataFile)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td><a href="#" class="btn-link">{{ $dataFile->nama_file }}</a></td>
                        <td>
                            <form action="#" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection