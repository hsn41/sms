<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable=[
        'name',
        'namenumeric'
    ];
    public function section(){
        return $this->hasOne('App\Section');
    }
    public function student(){
        return $this->belongsTo('App\Student');
    }
}
