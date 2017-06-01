<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{

  protected $fillable = ['name','description','website','slug','status'];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function location(){
    return $this->hasOne('App\Location');
  }

  public function contact(){
    return $this->hasOne('App\Contact');
  }

  public function jobs(){
    return $this->hasMany('App\Job');
  }

}
