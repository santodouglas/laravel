<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\carbon;

class idea extends Model
{
    protected $fillable = ['autor','texto','categoria_id'];
    public function getCreatedAtAttribute($value)
    {
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }

     //Relacionamento
     public function categoria()
     {
         # code...
         return $this->belongsTo('App\Categoria');
     }

}
