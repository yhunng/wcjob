<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $fillable = ['title', 'status','description','slug'];

  public function employer(){
    return $this->belongsTo('App\Employer');
  }

  public function location(){
    return $this->belongsTo('App\Location');
  }

  public function salary(){
    return $this->belongsTo('App\Salary');
  }

  public function jobtype(){
    return $this->belongsTo('App\Jobtype');
  }

  public function industry(){
    return $this->belongsTo('App\Industry');
  }

  public function jobseekers(){
    return $this->belongsToMany('App\Jobseeker', 'apply');
  }

  public function qualifications(){
    return $this->belongsToMany('App\Qualification', 'job_qualification');
  }
}
