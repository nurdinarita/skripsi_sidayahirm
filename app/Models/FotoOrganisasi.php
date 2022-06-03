<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoOrganisasi extends Model
{
    use HasFactory;
    protected $table = 'foto_organisasi';
    protected $guarded = ['id'];
}
