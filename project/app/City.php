<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    
    protected $table = 'city';

    protected $primaryKey = 'id_city';

    // protected $fillable = [];

    public $timestamps = false;


}
