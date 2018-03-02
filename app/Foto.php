<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = "images";
    protected $fillable = ['imagen','position'];

}
