<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class libros extends Model
{
    protected $fillable = array("idLibro", "idUsuario", "FechaReservacion");
}


