<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $table = 'faqs';
    protected $fillable = ['name', 'email', 'subject', 'questions'];

  
}
