<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**Cada base de datos debe tener su model
 * Los modelos Eloquent también le permiten
 * insertar, actualizar y eliminar registros de la tabla.
 *
 *  Flightmodelo almacena flights,
 *  AirTrafficControllermodelo almacenaría air_traffic_controllerstabla
 * */

class Cat extends Model
//El nombre de los modelos es en singular

{
    use HasFactory;

    /*public function user(){
        return $this->belongsTo(User::class);
    }*/

    protected $fillable =[
        'name',
        'gatos',
        'edad',
        'caracteristica'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
