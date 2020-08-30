<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model
{
    protected $fillable = ['status'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function disease(){
        return $this->belongsTo('App\Disease');
    }
}
