<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function contract()
    {
        return $this->hasMany(Contract::class);
    }
}
