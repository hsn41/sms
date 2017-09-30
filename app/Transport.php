<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable=[
        'route_name',
        'vehicle_numbers',
        'description',
        'charges'
    ];
    public function student(){
        return $this->belongsTo('App\Student');
    }
}
