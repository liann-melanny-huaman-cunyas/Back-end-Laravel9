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

class Cats extends Model
{
    use HasFactory;
}
