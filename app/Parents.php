<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected  $fillable=[
        'name',
        'profession',
        'address',
        'phone',
        'email',
        'password'
    ];

    public function setPasswordAttribute($password){
        if (!empty($password)){
            $this->attributes['password']=bcrypt($password);
        }
    }
}
