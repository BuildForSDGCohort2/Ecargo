<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable = ['magnitude', 'symptom_id', 'user_id', 'status', 'ehrCode'];

    public function symptom(){
        return $this->belongsTo('App\Symptom');
    }
}
