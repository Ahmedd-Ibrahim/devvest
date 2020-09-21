<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = 'testimony';
    protected $fillable = [


        'name',
        'job_title',
        'avater',
        'comment',
        
    ];
}
