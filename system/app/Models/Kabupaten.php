<?php

namespace App\Models;

use App\Models\Kecamatan;
use App\Models\Provinsi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\database\Eloquent\model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $table = 'kabupaten';

    function Kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'kabupaten_id');
    }

    function Provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}
