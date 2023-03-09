<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectReuqest;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Project $project)
    {
        $dataProject = $project->get();

        return view('project.index', compact('dataProject'));
    }

    public function tambah()
    {
        return view('project.tambah');
    }

    public function simpan(Project $project, ProjectReuqest $projectReuqest)
    {
        $data = $projectReuqest->validated();

        $project->create($data);

        return redirect()->route('project.index')->with('berhasil', 'Data project berhasil ditambahkan.');
    }

    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    public function update(Project $project, ProjectReuqest $projectRequest)
    {
        $data = $projectRequest->validated();

        $project->update($data);

        return redirect()->route('project.index')->with('berhasil', 'Data project berhasil diupdate.');
    }

    public function hapus(Project $project)
    {
        $project->delete();

        return back()->with('berhasil', 'Data project berhasil dihapus.');
    }
}
