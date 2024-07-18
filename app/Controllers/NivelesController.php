<?php

namespace App\Controllers;
use App\Models\NivelesModel;
class NivelesController extends BaseController
{
    public function index(): string
    {
        $nivel = new NivelesModel();
        $datos['datos']=$nivel->findAll();
        return view('niveles',$datos);
    }
    public function nuevoNivel(): string
    {
        return view('niveles_nuevos');
    }

    public function agregarNivel()
    {
        $datos=[
            'cod_nivel_acad' => $this->request->getVar('txtCodNivel'),
            'nombre' => $this->request->getVar('txtNombre'),
            'descripcion' => $this->request->getVar('txtDescripcion')
        ];
        $niveles = new NivelesModel();
        $niveles->insert($datos);
        return redirect()->route('niveles');
    }
}