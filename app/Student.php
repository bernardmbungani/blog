<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey='st_id';
    protected $fillable=['st_id','fullname','gender','residence','contact','age'];  
}
