<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers  extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      //Cargar el modelo
      $this->load->model('Customer');

    }

	public function new()
	{
		$this->load->view('header');
		$this->load->view('customers/new');
		$this->load->view('footer');
	}

	public function list()
	{
        $data['customers']=$this->Customer->obtenerCustomer();
		$this->load->view('header');
		$this->load->view('customers/list',$data);
		$this->load->view('footer');
	}

	public function edit($id_cli)
	{
    $data['editCustomer']=$this->Customer->ObtenerporId($id_cli);
		$this->load->view('header');
		$this->load->view('customers/edit',$data);
		$this->load->view('footer');
	}

    public function guardar(){
        $datosNuevoCustomer  = array (
            "name_cli" =>$this->input->post('name_cli'),
            "lastname_cli"=>$this->input->post('lastname_cli'),
            "card_cli"=>$this->input->post('card_cli'),
            "direction_cli"=>$this->input->post('direction_cli'),
            "mail_cli"=>$this->input->post('mail_cli'),
            "phone_cli"=>$this->input->post('phone_cli')

        );

        if ($this->Customer->insertar($datosNuevoCustomer))
        {
            redirect ('customers/list');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }


    public function eliminar($id_cli)
    {

      if ($this->Customer->borrar($id_cli)) {
        redirect('customers/list');
      } else {
        echo "Error";

      }

    }

    public function procesoActualizar(){
        $datosActulizar = array (
            "name_cli" =>$this->input->post('name_cli'),
            "lastname_cli"=>$this->input->post('lastname_cli'),
            "card_cli"=>$this->input->post('card_cli'),
            "direction_cli"=>$this->input->post('direction_cli'),
            "mail_cli"=>$this->input->post('mail_cli'),
            "phone_cli"=>$this->input->post('phone_cli')

        );

        $id_cli=$this->input->post("id_cli");
        if ($this->Customer->actualizar($id_cli,$datosActulizar)){
            redirect ('customers/list');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }

}


?>
