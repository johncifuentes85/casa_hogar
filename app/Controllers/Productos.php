<?php

namespace App\Controllers;

use App\Models\ProductoModelo;

class Productos extends BaseController
{

    public function index()
    {
        return view('registroProductos');
    }


    public function registrar()
    {

        //1. Recibo todos los datos enviados desde el formulario (vista)
        //Lo que tengo entre getPost("") es el name que puse a cada input
        $producto = $this->request->getPost("producto");
        $fotografia = $this->request->getPost("fotografia");
        $precio = $this->request->getPost("precio");
        $descripcion = $this->request->getPost("descripcion");
        $tipo = $this->request->getPost("tipo");

        //2. Valido que llego
        if ($this->validate('producto')) {


            //3.se organizan los datos en un array primero va el nombre del campo en la base de datos
            $datos = array(
                "producto" => $producto,
                "fotografia" => $fotografia,
                "precio" => $precio,
                "descripcion" => $descripcion,
                "tipo" => $tipo
            );

            //4. grabamos datos en la base de datos
            try {

                $modelo = new ProductoModelo(); //se crea un objeto de la clase modelo
                $modelo->insert($datos);
                return redirect()->to(site_url('/productos/registros'))->with('mensaje', "Exito agregando el producto");
            } catch (\Exception $error) {

                return redirect()->to(site_url('/productos/registros'))->with('mensaje', $error->getMessage());
            }

            print_r($datos);
        } else {

            $mensaje = "tienes datos pendientes";
            return redirect()->to(site_url('/productos/registros'))->with('mensaje', $mensaje);

            //echo("tienes datos pendientes");

        }


        // //3. Crear un arreglo asociativo con los datos punto 1
        // $datos=array(

        //     "producto"=>$producto,
        //     "foto"=>$fotografia,
        //     "precio"=>$precio,
        //     "descripcion"=>$descripcion,
        //     "tipo"=>$tipo

        // );

        // print_r($datos);
    }

    public function buscar()
    {
        try {

            $modelo = new ProductoModelo();
            $resultado = $modelo->findAll();
            $productos = array('productos'=>$resultado);
            return view('listaProductos', $productos);

        } catch (\Exception $error) {

            return redirect()->to(site_url('/productos/registros'))->with('mensaje', $error->getMessage());
        }
    }

    public function eliminar($id){

        //echo("Eliminando al producto: ".$id); //para probar
        try {

            $modelo = new ProductoModelo();
            $modelo->where('id', $id)->delete();
            return redirect()->to(site_url('/productos/registros'))->with('mensaje', "Exito eliminado el producto");

        } catch (\Exception $error) {

            return redirect()->to(site_url('/productos/registros'))->with('mensaje', $error->getMessage());
        }
    }
}
