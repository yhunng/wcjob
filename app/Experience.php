<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

  protected $fillable = ['title','company','location','from_year', 'from_month',
                        'to_year','to_month','responsibilities','skills'];

  public function jobseeker(){
    return $this->belongsTo('App\Jobseeker');
  }
}
