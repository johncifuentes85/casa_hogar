<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('registroProductos');
    }

    public function registrar()
    {
        //1. recibo todos los datos enviados desde el formulario
        $producto=$this->request->getPost("producto");
        $fotografia=$this->request->getPost("fotografia");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2. Vamos a validar los campos
        if($this->validate('producto')){

            //echo("todo esta bien");

        }else{

            $mensaje="Tienes datos pendientes";
            return redirect()->to(site_url('/productos/registros'))->with('mensaje',$mensaje);
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
