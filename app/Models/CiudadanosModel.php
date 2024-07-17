<?php

namespace App\Models;

use CodeIgniter\Model;

class CiudadanosModel extends Model
{
    protected $table         = 'ciudadanos';
    protected $allowedFields = [
        'dpi', 'apellido', 'nombre','dirección','tel_casa','tel_movil'.'email','fechanac','cod_nivel_acad','cod_muni','contra',
    ];
}