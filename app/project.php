<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $table = 'projects';
  protected $fillable = ['service_title', 'service_customer', 'service_autor', 'service_link', 'service_extract', 'service_photo', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
