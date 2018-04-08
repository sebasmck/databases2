<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculty';

    protected $primaryKey = 'id_faculty';

    // protected $fillable = [];

    public $timestamps = false;
}
