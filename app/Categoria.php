<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // protected $table='Nombre_de_la_tabla';

    protected $fillable=[

        'categoria',
        'descripcion'

          ];
          //permite habilitar las   Categoria de tiemp en la BD

          public function cosmeticos()
          {
              return $this->hasMany('App\Moto');
          }

}
