<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $primaryKey = 'id_course';

    // protected $fillable = [];

    public $timestamps = false;


    public function teachers(){

        return $this->hasMany('App\Teacher', 'id_course', 'id_course');

    }


}
