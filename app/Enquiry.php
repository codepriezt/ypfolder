<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    public $table = 'enquiries';


    protected $fillable = [
            'attended' , 'present'
    ];
}
