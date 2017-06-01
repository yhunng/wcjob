<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['qualification','school','location'];

  public function jobseeker(){
    return $this->belongsTo('App\Jobseeker');
  }
}
