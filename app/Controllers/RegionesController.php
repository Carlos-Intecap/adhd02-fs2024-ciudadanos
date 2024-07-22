<?php

namespace App\Controllers;
use App\Models\RegionesModel;
class RegionesController extends BaseController
{
    public function index(): string
    {
        $region = new RegionesModel();
        $datos['datos']=$region->findAll();
        return view('regiones',$datos);
    }
    public function nuevaRegion(): string
    {
        return view('regiones_nuevas');
    }

    public function agregarRegion()
    {
        $datos=[
            'cod_region' => $this->request->getVar('txtCodRegion'),
            'nombre' => $this->request->getVar('txtNombre'),
            'descripcion' => $this->request->getVar('txtDescripcion')
        ];
        $regiones = new RegionesModel();
        $regiones->insert($datos);
        return redirect()->route('regiones');
    }

    public function eliminarRegion($id=null)
    {
        $regiones = new RegionesModel();
        $regiones->delete(['cod_region'=>$id]);
        return redirect()->route('regiones');
    }
}