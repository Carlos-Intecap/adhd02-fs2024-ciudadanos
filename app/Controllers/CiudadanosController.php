<?php

namespace App\Controllers;
use App\Models\CiudadanosModel;
class CiudadanosController extends BaseController
{
    public function index(): string
    {
        $ciudadano = new CiudadanosModel();
        $datos['datos']=$ciudadano->findAll();
        return view('ciudadanos',$datos);
    }
    public function nuevoCiudadano(): string
    {
        return view('ciudadanos_nuevos');
    }

    public function agregarCiudadano()
    {
        $datos=[
            'dpi' => $this->request->getVar('txtDpi'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nombre' => $this->request->getVar('txtNombre'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'tel_casa' => $this->request->getVar('txtTelCasa'),
            'tel_movil' => $this->request->getVar('txtTelMovil'),
            'email' => $this->request->getVar('txtEmail'),
            'fechanac' => $this->request->getVar('txtFechanac'),
            'cod_nivel_acad' => $this->request->getVar('txtCodNivelAcad'),
            'cod_muni' => $this->request->getVar('txtCodMuni'),
            'contra' => $this->request->getVar('txtContra')
        ];
        $ciudadanos = new CiudadanosModel();
        $ciudadanos->insert($datos);
        return redirect()->route('ciudadanos');
    }
}