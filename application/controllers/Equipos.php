<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos  extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      //Cargar el modelo
      $this->load->model('Equipo');

    }

	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('equipos/nuevo');
		$this->load->view('footer');
	}

	public function listado()
	{
        $data['equipos']=$this->Equipo->obtenerEquipo();
		$this->load->view('header');
		$this->load->view('equipos/listado',$data);
		$this->load->view('footer');
	}

	public function editar($id_equi)
	{
        $data['editarEquipo']=$this->Equipo->ObtenerporId($id_equi);
		$this->load->view('header');
		$this->load->view('equipos/editar',$data);
		$this->load->view('footer');
	}

    public function guardar(){
        $datosNuevoCliente  = array (
            "nombre_equi" =>$this->input->post('nombre_equi'),
            "plantilla_equi"=>$this->input->post('plantilla_equi')

        );

        if ($this->Equipo->insertar($datosNuevoEquipo))
        {
            redirect ('equipos/listado');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }


    public function eliminar($id_equi)
    {

      if ($this->Equipo->borrar($id_equi)) {
        redirect('equipos/listado');
      } else {
        echo "Error";

      }

    }

    public function procesoActualizar(){
        $datosActulizar = array (
            "nombre_equi" =>$this->input->post('nombre_equi'),
            "plantilla_equi"=>$this->input->post('plantilla_equi')

        );

        $id_equi=$this->input->post("id_equi");
        if ($this->Equipo->actualizar($id_equi,$datosActulizar)){
            redirect ('equipos/listado');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }

}


?>
