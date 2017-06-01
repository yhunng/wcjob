<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{

  protected $fillable = ['name', 'title', 'descritpion','status','slug'];

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
    return $this->belongsToMany('App\Jobs', 'apply');
  }

  public function skills(){
    return $this->hasMany('App\Skill');
  }

  public function experiences(){
    return $this->hasMany('App\Experience');
  }

  public function educations(){
    return $this->hasMany('App\Education');
  }
}
