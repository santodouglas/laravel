<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    public $timestamps = false;

     public function ideas()
     {
         return $this->hasMany('App\idea');
     }
}
