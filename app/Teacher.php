<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=[
        'first_name',
        'last_name',
        'address',
        'phone',
        'gender',
        'photo_id',
        'email',
        'password'


    ];
    public function section(){
        return $this->hasOne('App\Section');
    }
    public function setPasswordAttribute($password){
        if (!empty($password)){
            $this->attributes['password']=bcrypt($password);
        }
    }
}
