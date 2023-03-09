<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'project';

    protected $fillable = [
        'nama',
        'lokasi'
    ];

    public function file()
    {
        return $this->hasMany(File::class, 'project_id')->orderBy('nama_file', 'asc');
    }
}
