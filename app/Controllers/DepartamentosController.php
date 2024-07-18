<?php
namespace App\Controllers;
//utilizar el modelo
use App\Models\DepartamentosModel;
class DepartamentosController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo DepartamentosModel
        $departamento = new DepartamentosModel();
        $datos['datos']=$departamento->findAll();
        //findAll() = select * from departamentos;
        return view('departamentos',$datos);
    }
}