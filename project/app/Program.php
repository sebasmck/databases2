<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';

    protected $primaryKey = 'id_program';

    // protected $fillable = [];

    public $timestamps = false;

    public function courses(){
        return $this->hasMany('App\Course', 'id_program', 'id_program');
    }
}
