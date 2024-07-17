<?php
namespace App\Controllers;
//utilizar el modelo
use App\Models\NivelesModel;
class Niveles extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo NivelesModel
        $nivel = new NivelesModel();
        $datos['datos']=$nivel->findAll();
        //findAll() = select * from niveles;
        return view('niveles',$datos);
    }
}