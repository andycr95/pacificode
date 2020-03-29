<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimony extends Model
{
    //
    protected $table = 'testimonies';
   
    protected $fillable = ['testimony_title', 'testimony_name', 'testimony_photo', 'testimony_extract', 'testimony_body'];
}
