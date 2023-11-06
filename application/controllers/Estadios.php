<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadios  extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      //Cargar el modelo
      $this->load->model('Estadio');

    }

	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('estadios/nuevo');
		$this->load->view('footer');
	}

	public function listado()
	{
        $data['estadios']=$this->Estadio->obtenerEstadio();
		$this->load->view('header');
		$this->load->view('estadios/listado',$data);
		$this->load->view('footer');
	}

	public function editar($id_est)
	{
        $data['editarEstadio']=$this->Estadio->ObtenerporId($id_est);
		$this->load->view('header');
		$this->load->view('estadios/editar',$data);
		$this->load->view('footer');
	}

    public function guardar(){
        $datosNuevoEstadio  = array (
            "nombre_est" =>$this->input->post('nombre_est'),
            "direccion_est"=>$this->input->post('direccion_est'),
            "capacidad_est"=>$this->input->post('capacidad_est'),
            "localidad_est"=>$this->input->post('localidad_est'),
            "puertas_ingreso_est"=>$this->input->post('puertas_ingreso_est')


        );

        if ($this->Estadio->insertar($datosNuevoEstadio))
        {
            redirect ('estadios/listado');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }


    public function eliminar($id_est)
    {

      if ($this->Estadio->borrar($id_est)) {
        redirect('estadios/listado');
      } else {
        echo "Error";

      }

    }

    public function procesoActualizar(){
        $datosActulizar = array (
          "nombre_est" =>$this->input->post('nombre_est'),
          "direccion_est"=>$this->input->post('direccion_est'),
          "capacidad_est"=>$this->input->post('capacidad_est'),
          "localidad_est"=>$this->input->post('localidad_est'),
          "puertas_ingreso_est"=>$this->input->post('puertas_ingreso_est')

        );

        $id_est=$this->input->post("id_est");
        if ($this->Estadio->actualizar($id_est,$datosActulizar)){
            redirect ('estadios/listado');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }

}


?>
