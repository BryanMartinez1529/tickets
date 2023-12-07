<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets  extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      //Cargar el modelo
      $this->load->model('Ticket');

    }

	public function new()
	{
		$this->load->view('header');
		$this->load->view('tickets/new');
		$this->load->view('footer');
	}

	public function list()
	{
    $data['tickets']=$this->Ticket->obtenerTicket();
    $data['totalMoney']=$this->Ticket->getTotalMoney();
		$this->load->view('header');
		$this->load->view('tickets/list',$data);
		$this->load->view('footer');
	}

	public function edit($id_ticket)
	{
        $data['editTicket']=$this->Ticket->ObtenerporId($id_ticket);
		$this->load->view('header');
		$this->load->view('tickets/edit',$data);
		$this->load->view('footer');
	}

    public function guardar(){
        $datosNuevoTicket  = array (
            "worth_ticket" =>$this->input->post('worth_ticket'),
            "time_ticket"=>$this->input->post('time_ticket'),
            "date_ticket"=>$this->input->post('date_ticket'),
            "seat_ticket"=>$this->input->post('seat_ticket'),
            "door_ingreso"=>$this->input->post('door_ingreso'),
            "card_cli"=>$this->input->post('card_cli'),
			      "name_equipo"=>$this->input->post('name_equipo'),
		        "name_estadio"=>$this->input->post('name_estadio'),

        );

        if ($this->Ticket->insertar($datosNuevoTicket))
        {
            redirect ('tickets/list');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }


    public function eliminar($id_ticket)
    {

      if ($this->Ticket->borrar($id_ticket)) {
        redirect('tickets/list');
      } else {
        echo "Error";

      }

    }

    public function procesoActualizar(){
        $datosActulizar = array (
          "worth_ticket" =>$this->input->post('worth_ticket'),
          "time_ticket"=>$this->input->post('time_ticket'),
          "date_ticket"=>$this->input->post('date_ticket'),
          "seat_ticket"=>$this->input->post('seat_ticket'),
          "door_ingreso"=>$this->input->post('door_ingreso'),
          "card_cli"=>$this->input->post('card_cli'),
          "name_equipo"=>$this->input->post('name_equipo'),
          "name_estadio"=>$this->input->post('name_estadio'),
        );

        $id_ticket=$this->input->post("id_ticket");
        if ($this->Ticket->actualizar($id_ticket,$datosActulizar)){
            redirect ('tickets/list');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }

}


?>
