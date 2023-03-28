<?php

namespace App\Http\Controllers;

use App\Models\{File, Project};
use App\Http\Requests\FileRequest;
use App\Http\Requests\UbahNamaRequest;

class FileController extends Controller
{
    public function index(Project $project, File $file)
    {
        $dataFile = $project->file;

        return view('file.index', compact('dataFile', 'project'));
    }

    public function simpan(Project $project, File $file, FileRequest $fileRequest)
    {
        $dataFile = $fileRequest->file('file');

        foreach ($dataFile as $data) {
            $name = $data->getClientOriginalName();
            $path = $data->storeAs('file', $data->hashName() . '.' . $data->extension());

            $file->create([
                'project_id' => $project->id,
                'nama_file' => $name,
                'path' => $path
            ]);
        }

        return back()->with('berhasil', 'Semua file berhasil diupload.');
    }

    public function edit(Project $project, File $file)
    {
        return view('file.ubahNama', compact('project', 'file'));
    }

    public function update(Project $project, File $file, UbahNamaRequest $ubahNamaRequest)
    {
        $data = $ubahNamaRequest->validated();

        $file->update($data);

        return to_route('file.index', $project->id)->with('berhasil', 'Nama file berhasil diubah');
    }
}
