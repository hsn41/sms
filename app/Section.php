<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable=[
        'name_section',
        'nick_name',
        'class_id',
        'teacher_id'
    ];
    public function classes()
    {
        return $this->belongsTo('App\Classes','class_id','id');
    }

    public function teachers()
    {
        return $this->belongsTo('App\Teacher','teacher_id','id');
    }
    public function student(){
        return $this->belongsTo('App\Student');
    }
}
