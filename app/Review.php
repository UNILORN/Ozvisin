<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';

    public function code(){
      return $this->belongsTo('App\Code');
    }

    public function company(){
      return $this->belongsTo('App\Company');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }
}
