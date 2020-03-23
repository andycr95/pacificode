<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['nombre', 'email', 'tema', 'telefono', 'mensaje'];
}
