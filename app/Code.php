<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'code';

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function subject(){
      return $this->belongsTo('App\Subject');
    }
}
