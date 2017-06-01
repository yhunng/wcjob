<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $fillable = ['name'];

  public function employer(){
    return $this->belongsTo('App\Employer');
  }

  public function jobseeker(){
    return $this->belongsTo('App\Jobseeker');
  }

  public function jobs(){
    return $this->hasMany('App\Job');
  }
}
