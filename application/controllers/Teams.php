<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams  extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      //Cargar el modelo
      $this->load->model('Team');

    }

	public function new()
	{
		$this->load->view('header');
		$this->load->view('teams/new');
		$this->load->view('footer');
	}

	public function list()
	{
        $data['teams']=$this->Team->obtenerTeam();
		$this->load->view('header');
		$this->load->view('teams/list',$data);
		$this->load->view('footer');
	}

	public function edit($id_equi)
	{
        $data['editTeam']=$this->Team->ObtenerporId($id_equi);
		$this->load->view('header');
		$this->load->view('teams/edit',$data);
		$this->load->view('footer');
	}

    public function guardar(){
        $datosNuevoTeam  = array (
            "name_equi"=>$this->input->post('name_equi'),
            "template_equi"=>$this->input->post('template_equi')
        );

        if ($this->Team->insertar($datosNuevoTeam))
        {
            redirect ('teams/list');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }


    public function eliminar($id_equi)
    {

      if ($this->Team->borrar($id_equi)) {
        redirect('teams/list');
      } else {
        echo "Error";

      }

    }

    public function procesoActualizar(){
        $datosActulizar = array (
            "name_equi" =>$this->input->post('name_equi'),
            "template_equi"=>$this->input->post('template_equi')

        );

        $id_equi=$this->input->post("id_equi");
        if ($this->Team->actualizar($id_equi,$datosActulizar)){
            redirect ('teams/list');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }

}


?>
