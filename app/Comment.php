<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['comment'];

        public function post()
        {
            return $this->belongsTo(Post::class);
        }
}
