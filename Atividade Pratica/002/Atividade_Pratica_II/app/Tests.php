<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
  protected $fillable = ['date', 'user_id', 'procedure_id'];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function procedure(){
      return $this->belongsTo('App\Procedures');

  }

}
