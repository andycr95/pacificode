<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{

    protected $table = 'answers';
    protected $fillable = ['name', 'faq_id'];
    public function faq()
    {
        return $this->belongsTo(Faq::class);
    }
}
