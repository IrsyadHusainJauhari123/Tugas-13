<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\database\Eloquent\model;

use App\Models\Kecamatan;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desa';

    function Kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
}
