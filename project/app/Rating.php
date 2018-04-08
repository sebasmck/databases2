<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating';

    protected $primaryKey = 'id_rating';

    // protected $fillable = [];

    public $timestamps = false;
}
