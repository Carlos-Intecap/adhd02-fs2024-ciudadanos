<?php
namespace App\Controllers;
//utilizar el modelo
use App\Models\CiudadanosModel;
class CiudadanosController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo CiudadanosModel
        $ciudadano = new CiudadanosModel();
        $datos['datos']=$ciudadano->findAll();
        //findAll() = select * from ciudadanos;
        return view('ciudadanos',$datos);
    }
}