<?php

namespace App\Controllers;
use App\Models\DepartamentosModel;
class DepartamentosController extends BaseController
{
    public function index(): string
    {
        $departamento = new DepartamentosModel();
        $datos['datos']=$departamento->findAll();
        return view('departamentos',$datos);
    }
    public function nuevoDepartamento(): string
    {
        return view('departamentos_nuevos');
    }

    public function agregarDepartamento()
    {
        $datos=[
            'cod_depto' => $this->request->getVar('txtDepto'),
            'nombre_depto' => $this->request->getVar('txtNombre'),
            'cod_region' => $this->request->getVar('txtCodRegion')
        ];
        $departamentos = new DepartamentosModel();
        $departamentos->insert($datos);
        return  redirect()->route('departamentos');
    }

    public function eliminarDepartamento($id=null)
    {
        $departamentos = new DepartamentosModel();
        $departamentos->delete(['cod_depto'=>$id]);
        return redirect()->route('departamentos');
    }
    public function buscarDepartamento($id=null){
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->where('cod_depto',$id)->first();
        return view('form_modificar_departamento',$datos);
    }
    public function modificarDepartamento(){
        $datos=[
            'cod_depto'=>$this->request->getVar('txtDepto'),
            'nombre_depto'=>$this->request->getVar('txtNombre'),
            'cod_region'=>$this->request->getVar('txtCodRegion')   
        ];
        $departamentos = new DepartamentosModel();
        $departamentos->update($datos['cod_depto'],$datos);
        return redirect()->route('departamentos');
    }
}