<?php

namespace App\Controllers;
use App\Models\MunicipiosModel;
class MunicipiosController extends BaseController
{
    public function index(): string
    {
        $municipio = new MunicipiosModel();
        $datos['datos']=$municipio->findAll();
        return view('municipios',$datos);
    }
    public function nuevoMunicipio(): string
    {
        return view('municipios_nuevos');
    }

    public function agregarMunicipio()
    {
        $datos=[
            'cod_muni' => $this->request->getVar('txtCodMuni'),
            'nombre_municipio' => $this->request->getVar('txtNombre'),
            'cod_depto' => $this->request->getVar('txtCodDepto')
        ];
        $municipios = new MunicipiosModel();
        $municipios->insert($datos);
        return redirect()->route('municipios');
    }

    public function eliminarMunicipio($id=null)
    {
        $municipios = new MunicipiosModel();
        $municipios->delete(['cod_muni'=>$id]);
        return redirect()->route('municipios');
    }
    public function buscarMunicipio($id=null){
        $municipios = new MunicipiosModel();
        $datos['datos']=$municipios->where('cod_muni',$id)->first();
        return view('form_modificar_municipio',$datos);
    }
    public function modificarMunicipio(){
        $datos=[
            'cod_muni'=>$this->request->getVar('txtCodMuni'),
            'nombre_municipio'=>$this->request->getVar('txtNombre'),
            'cod_depto'=>$this->request->getVar('txtCodDepto')
        ];
        $municipios = new MunicipiosModel();
        $municipios->update($datos['cod_muni'],$datos);
        return redirect()->route('municipios');
    }
}