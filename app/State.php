<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $table = 'state';


    protected $fillable = [
            'name'
    ];
}
