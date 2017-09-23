<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected  $fillable=[
        'name',
        'profession',
        'address',
        'email',
        'password'
    ];
}
