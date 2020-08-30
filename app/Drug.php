<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{

    protected $fillable = ['drugName'];
    public function diseases(){
        return $this->belongsToMany('App\Disease')->withPivot('disease_id', 'drug_id');
    }
}
