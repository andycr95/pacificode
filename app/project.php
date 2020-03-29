<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
  protected $table = 'projects';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
