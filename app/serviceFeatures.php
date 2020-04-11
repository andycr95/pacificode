<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serviceFeatures extends Model
{
    protected $table = 'service_features';
    protected $fillable = ['features_title',  'features_body', 'features_photo', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
