<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = ['sname', 'gender', 'age_id'];

    public function diseases(){
        return $this->belongsToMany('App\Disease')->withPivot('disease_id', 'symptom_id', 'magnitude');
    }

    public function age(){
        return $this->belongsTo('App\Age');
    }
}
