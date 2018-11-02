<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personalinfo extends Model
{
  protected $fillable=['user_id','fname','mname','sname','age'];  
}
