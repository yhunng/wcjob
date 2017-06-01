<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['email', 'phone', 'facebook', 'linkedin'];

    public function employer(){
      return $this->belongsTo('App\Employer');
    }

    public function jobseeker(){
      return $this->belongsTo('App\Jobseeker');
    }
}
