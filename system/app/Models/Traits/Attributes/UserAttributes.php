<?php

namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;

trait UserAttributes
{
    function getJenisKelaminStringAttribute()
    {
        return ($this->jenis_kelamin == 1) ? "Laki-Laki" : "Perempuan";
    }

    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function setUserNameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }
}
