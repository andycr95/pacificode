<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suscripcion extends Model
{
    //
    protected $table = 'suscripcions';
    protected $fillable = ['email'];
}
