<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'parent_id',
        'class_id',
        'section_id',
        'transport_id',
        'name',
        'roll_number',
        'birthday',
        'gender',
        'address',
        'phone',
        'email',
        'password',
        'photo'
    ];
    public function classes(){
        return $this->belongsTo('App\Classes');
    }
    public function parent(){
        return $this->belongsTo('App\Parents');
    }
    public function section(){
        return $this->belongsTo('App\Section');
    }
    public function transport(){
        return $this->belongsTo('App\Transport');
    }
}
