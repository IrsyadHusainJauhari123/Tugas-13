<?php

namespace App\Models;

use app\Models\Kabupaten;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\database\Eloquent\model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';

    function Kabupaten()
    {
        return $this->hasMany(Kabupaten::class, 'kabupaten_id');
    }
}
