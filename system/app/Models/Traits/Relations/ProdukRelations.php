<?php

namespace App\Models\Traits\Relations;


use App\Models\User;

trait ProdukRelations

{

    function seller()
    {
        return $this->Belongsto(User::class, 'id_user');
    }
}
