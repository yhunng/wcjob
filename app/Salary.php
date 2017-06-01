<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{

  protected $fillable = ['from','to'];


  public function jobs(){
    return $this->hasMany('App\Job');
  }
}
