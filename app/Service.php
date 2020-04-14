<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'services';
    protected $fillable = ['service_name', 'service_extract', 'service_body', 'service_photo', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    

  
}
