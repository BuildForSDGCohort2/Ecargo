<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{

    protected $fillable = ['dname', 'ddescription'];

    public function symptoms() {
        return $this->belongsToMany('App\Symptom')->withPivot('disease_id', 'symptom_id', 'magnitude');
    }

    public function drugs() {
        return $this->belongsToMany('App\Drug')->withPivot('disease_id', 'drug_id');
    }
}
