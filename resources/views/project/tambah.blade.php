@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Project</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('project.simpan') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama" class="text-secondary">Nama Project</label>
                        <input type="text" class="form-control mt-1" name="nama" id="nama" placeholder="cth. Peningkatan IUP Operasi Produksi" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="lokasi" class="text-secondary">Lokasi Project</label>
                        <textarea class="form-control mt-1" name="lokasi" id="lokasi" rows="3" placeholder="cth. Jalan Lintas Selatan...">{{ old('lokasi') }}</textarea>
                        @error('lokasi')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection