<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['health_record_id', 'report'];

    public function records(){
        return $this->belongsTo('App\HealthRecord');
    }
}
