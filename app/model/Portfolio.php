<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';

    protected $fillable = [

        'photo',
        'title',
        'disc',
    ];
}
