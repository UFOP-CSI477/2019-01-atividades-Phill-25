<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedures extends Model
{
    protected $fillable = ['id', 'nome', 'price', 'user_id'];

    public function users(){
      return $this->belongsTo('App\User');
    }

}
