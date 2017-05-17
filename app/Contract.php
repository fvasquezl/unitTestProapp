<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable =['name'];

    public function car()
    {
        $this->belongsTo(Car::class);
    }
}
