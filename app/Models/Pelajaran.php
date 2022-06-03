<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelajaran extends Model
{
    use HasFactory;
    protected $table = 'pelajaran';
    protected $guarded = [];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }
}
