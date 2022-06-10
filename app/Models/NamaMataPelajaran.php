<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaMataPelajaran extends Model
{
    use HasFactory;
    protected $table = 'nama_mata_pelajaran';
    protected $guarded = ['id'];
}
