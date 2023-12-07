<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stadiums  extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      //Cargar el modelo
      $this->load->model('Stadium');

    }

	public function new()
	{
		$this->load->view('header');
		$this->load->view('stadiums/new');
		$this->load->view('footer');
	}

	public function list()
	{
        $data['stadiums']=$this->Stadium->obtenerStadium();
		$this->load->view('header');
		$this->load->view('stadiums/list',$data);
		$this->load->view('footer');
	}

	public function edit($id_est)
	{
        $data['editStadium']=$this->Stadium->ObtenerporId($id_est);
		$this->load->view('header');
		$this->load->view('stadiums/edit',$data);
		$this->load->view('footer');
	}

    public function guardar(){
        $datosNuevoStadium  = array (
            "name_est" =>$this->input->post('name_est '),
            "direction_est"=>$this->input->post('direction_est'),
            "capacity_est"=>$this->input->post('capacity_est'),
            "location_est"=>$this->input->post('location_est'),
            "doors_ingreso_est"=>$this->input->post('doors_ingreso_est')


        );

        if ($this->Stadium->insertar($datosNuevoStadium))
        {
            redirect ('stadiums/list');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }


    public function eliminar($id_est)
    {

      if ($this->Stadium->borrar($id_est)) {
        redirect('stadiums/list');
      } else {
        echo "Error";

      }

    }

    public function procesoActualizar(){
        $datosActulizar = array (
          "name_est" =>$this->input->post('name_est '),
          "direction_est"=>$this->input->post('direction_est'),
          "capacity_est"=>$this->input->post('capacity_est'),
          "location_est"=>$this->input->post('location_est'),
          "doors_ingreso_est"=>$this->input->post('doors_ingreso_est')

        );

        $id_est=$this->input->post("id_est");
        if ($this->Stadium->actualizar($id_est,$datosActulizar)){
            redirect ('stadiums/list');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }

}


?>
