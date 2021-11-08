<?php

namespace App\Controllers;

use App\Models\AnimalModelo;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function registrar()
    {
         //1. Recibo todos los datos enviados desde el formulario (vista)
        //Lo que tengo entre getPost("") es el name que puse a cada input
        $nombre=$this->request->getPost("nombre");
        $edad=$this->request->getPost("edad");
        $fotografia=$this->request->getPost("fotografia");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2. Valido que llego
        if($this->validate('animal')){

          
            //3.se organizan los datos en un array primero va el nombre del campo en la base de datos
            $datos = array(
                "nombre" => $nombre,
                "edad" => $edad,
                "fotografia" => $fotografia,
                "descripcion" => $descripcion,
                "tipo" => $tipo
            );
            
            //4. grabamos datos en la base de datos
            try{

                $modelo = new AnimalModelo();//se crea un objeto de la clase modelo
                $modelo->insert($datos);
                return redirect()->to(site_url('/animales/registros'))->with('mensaje', "Exito agregando el producto");
                
            }catch(\Exception $error){

                return redirect()->to(site_url('/animales/registros'))->with('mensaje', $error->getMessage());

            }

            print_r($datos);

        }else{

            $mensaje="tienes datos pendientes";
            return redirect()->to(site_url('/animales/registros'))->with('mensaje',$mensaje);

            //echo("tienes datos pendientes");

        }
    }

    public function buscar(){

        try {

            $modelo = new AnimalModelo();
            $resultado = $modelo->findAll();
            $animales = array('animales'=>$resultado);
            return view('listaAnimales', $animales);

        } catch (\Exception $error) {

            return redirect()->to(site_url('/animales/registros'))->with('mensaje', $error->getMessage());
        }       
    }

    public function buscarTipo($tipo){

        try {

            $modelo = new AnimalModelo();
            $resultado = $modelo->where('tipo', $tipo)->findAll();
            $animales = array('animales'=>$resultado);
            return view('listaAnimalesTipo', $animales);

        } catch (\Exception $error) {

            return redirect()->to(site_url('/animales/registros'))->with('mensaje', $error->getMessage());
        }       
    }

    public function eliminar($id){

        //echo("Eliminando al producto: ".$id); //para probar
        try {

            $modelo = new AnimalModelo();
            $modelo->where('id', $id)->delete();
            return redirect()->to(site_url('/animales/registros'))->with('mensaje', "Exito eliminado el animal");

        } catch (\Exception $error) {

            return redirect()->to(site_url('/animales/registros'))->with('mensaje', $error->getMessage());
        }
    }

    public function editar($id){

        //recibe datos
        $nombre = $this->request->getPost("nombre");
        $descripcion = $this->request->getPost("descripcion");

        //hacer validacion de datos

        //organizo los datos en un array asociativo

        $datos = array(
            "nombre" => $nombre,
            "descripcion" => $descripcion,          
        );

        //echo("estamos editando el producto" .$id);
        //print_r($datos);

        try {

            $modelo = new AnimalModelo(); //se crea un objeto de la clase modelo
            $modelo->update($id, $datos);
            return redirect()->to(site_url('/animales/registros'))->with('mensaje', "Exito editando el animal");

        } catch (\Exception $error) {

            return redirect()->to(site_url('/animales/registros'))->with('mensaje', $error->getMessage());
        }

    }
}
