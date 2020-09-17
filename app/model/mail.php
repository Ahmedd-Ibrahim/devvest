<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    //
    protected $table = 'mail';

    protected $fillable = ['name','email','subject','messages','phone'];
}
