<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidik extends Model
{
    use HasFactory;
    protected $table = 'pendidik';
    protected $guarded = [];

    public function mapel(){
        return $this->belongsTo(Pelajaran::class, 'id_mapel', 'id');
    }

    public function kitab(){
        return $this->belongsTo(Kitab::class, 'id_judul_kitab', 'id');
    }
    
}
