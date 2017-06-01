<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{

  protected $fillable = ['title'];


  public function jobs(){
    return $this->belongsToMany('App\Job','job_qualification');
  }
}
