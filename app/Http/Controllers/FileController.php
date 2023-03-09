<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Models\{File, Project};

class FileController extends Controller
{
    public function index(Project $project, File $file)
    {
        $dataFile = $project->file;

        return view('file.index', compact('dataFile', 'project'));
    }

    public function simpan(Project $project, File $file, FileRequest $fileRequest)
    {
        $data = $fileRequest->validated();
    }
}
