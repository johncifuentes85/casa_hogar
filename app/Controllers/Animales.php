<?php

namespace App\Controllers;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function registrar()
    {
        //1. recibo todos los datos enviados desde el formulario
        $nombre=$this->request->getPost("nombre");
        $fotografia=$this->request->getPost("fotografia");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2. Vamos a validar los campos
        if($this->validate('animal')){

            //echo("todo esta bien");

        }else{

            $mensaje="Tienes datos pendientes (Animales)";
            return redirect()->to(site_url('/animales/registros'))->with('mensaje',$mensaje);
            //echo("tienes datos pendientes");

        }

        //3. crear un arreglo asocialivo con los datos del punto 1
        /*$datos=array(
            "producto"=>$producto,
            "fotografia"=>$fotografia,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );
        print_r($datos);*/
    }
}
