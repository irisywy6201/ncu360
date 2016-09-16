<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class building extends Model
{
  protected $fillable = ['body'];
  public $timestamps = false;
}
