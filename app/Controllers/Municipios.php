<?php
namespace App\Controllers;
//utilizar el modelo
use App\Models\MunicipiosModel;
class Municipios extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo MunicipiosModel
        $municipio = new MunicipiosModel();
        $datos['datos']=$municipio->findAll();
        //findAll() = select * from municipios;
        return view('municipios',$datos);
    }
}