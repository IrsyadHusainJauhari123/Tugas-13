<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use App\Models\Alamat;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
//use App\Models\Provinsi;

use Illuminate\Http\Request;

class AlamatResource extends Controller
{
    public function getKabupaten($provinsi_id)
    {
        return Kabupaten::where("provinsi_id", $provinsi_id)->get()->toJson();
    }

    public function getKecamatan($kabupaten_id)
    {
        return Kecamatan::where("kabupaten_id", $kabupaten_id)->get()->toJson();
    }

    public function getDesa($kecamatan_id)
    {
        return Desa::where("kecamatan_id", $kecamatan_id)->get()->toJson();
    }
}
