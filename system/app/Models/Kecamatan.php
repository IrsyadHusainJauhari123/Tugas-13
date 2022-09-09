<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Kabupaten;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\database\Eloquent\model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';

    function Desa()
    {
        return $this->hasMany(Desa::class, 'desa_id');
    }

    function Kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }
}
