<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'request';

    protected $primaryKey = 'id_request';

    // protected $fillable = [];

    public $timestamps = false;
}
