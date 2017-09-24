<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';

    public function code(){
      return $this->hasMany('App\Code');
    }
}
