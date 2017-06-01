<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

  protected $fillable = ['title'];


  public function jobseeker(){
    return $this->belongsTo('App\Jobseeker');
  }
}
