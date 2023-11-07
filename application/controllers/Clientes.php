<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes  extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      //Cargar el modelo
      $this->load->model('Cliente');

    }

	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('clientes/nuevo');
		$this->load->view('footer');
	}

	public function listado()
	{
        $data['clientes']=$this->Cliente->obtenerCliente();
		$this->load->view('header');
		$this->load->view('clientes/listado',$data);
		$this->load->view('footer');
	}

	public function editar($id_cli)
	{
    $data['editarCliente']=$this->Cliente->ObtenerporId($id_cli);
		$this->load->view('header');
		$this->load->view('clientes/editar',$data);
		$this->load->view('footer');
	}

    public function guardar(){
        $datosNuevoCliente  = array (
            "nombre_cli" =>$this->input->post('nombre_cli'),
            "apellido_cli"=>$this->input->post('apellido_cli'),
            "cedula_cli"=>$this->input->post('cedula_cli'),
            "direccion_cli"=>$this->input->post('direccion_cli'),
            "correo_cli"=>$this->input->post('correo_cli'),
            "telefono_cli"=>$this->input->post('telefono_cli')

        );

        if ($this->Cliente->insertar($datosNuevoCliente))
        {
            redirect ('clientes/listado');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }


    public function eliminar($id_cli)
    {

      if ($this->Cliente->borrar($id_cli)) {
        redirect('clientes/listado');
      } else {
        echo "Error";

      }

    }

    public function procesoActualizar(){
        $datosActulizar = array (
            "nombre_cli" =>$this->input->post('nombre_cli'),
            "apellido_cli"=>$this->input->post('apellido_cli'),
            "cedula_cli"=>$this->input->post('cedula_cli'),
            "direccion_cli"=>$this->input->post('direccion_cli'),
            "correo_cli"=>$this->input->post('correo_cli'),
            "telefono_cli"=>$this->input->post('telefono_cli')

        );

        $id_cli=$this->input->post("id_cli");
        if ($this->Cliente->actualizar($id_cli,$datosActulizar)){
            redirect ('clientes/listado');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }

}


?>
