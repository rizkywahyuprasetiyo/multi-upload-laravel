@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-5">
        <div class="card shadow px-3 py-4">
            <h4>Rubah Nama</h4>
            <form action="{{ route('file.update', [$project->id, $file->id]) }}" method="post">
                @csrf
                @method('patch')
                <label for="nama_file">Nama File</label>
                <div class="d-flex align-items-center gap-1">
                    <input type="text" class="form-control mt-1" name="nama_file" id="nama_file" placeholder="cth. File Penolakan" value="{{ $file->nama_file ?? '' }}">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection