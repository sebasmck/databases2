<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'university';

    protected $primaryKey = 'id_university';

    // protected $fillable = [];

    public $timestamps = false;
}
