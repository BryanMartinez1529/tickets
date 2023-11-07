<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets  extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      //Cargar el modelo
      $this->load->model('Ticket');

    }

	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('tickets/nuevo');
		$this->load->view('footer');
	}

	public function listado()
	{
        $data['tickets']=$this->Ticket->obtenerTicket();
		$this->load->view('header');
		$this->load->view('tickets/listado',$data);
		$this->load->view('footer');
	}

	public function editar($id_ticket)
	{
        $data['editarTicket']=$this->Ticket->ObtenerporId($id_ticket);
		$this->load->view('header');
		$this->load->view('tickets/editar',$data);
		$this->load->view('footer');
	}

    public function guardar(){
        $datosNuevoTicket  = array (
            "valor_ticket" =>$this->input->post('valor_ticket'),
            "hora_ticket"=>$this->input->post('hora_ticket'),
            "fecha_ticket"=>$this->input->post('fecha_ticket'),
            "asiento_ticket"=>$this->input->post('asiento_ticket'),
            "puerta_ingreso"=>$this->input->post('puerta_ingreso'),
            "cedula_cli"=>$this->input->post('cedula_cli'),
			      "nombre_equipo"=>$this->input->post('nombre_equipo'),
		        "nombre_estadio"=>$this->input->post('nombre_estadio'),

        );

        if ($this->Ticket->insertar($datosNuevoTicket))
        {
            redirect ('tickets/listado');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }


    public function eliminar($id_ticket)
    {

      if ($this->Ticket->borrar($id_ticket)) {
        redirect('tickets/listado');
      } else {
        echo "Error";

      }

    }

    public function procesoActualizar(){
        $datosActulizar = array (
          "valor_ticket" =>$this->input->post('valor_ticket'),
          "hora_ticket"=>$this->input->post('hora_ticket'),
          "fecha_ticket"=>$this->input->post('fecha_ticket'),
          "asiento_ticket"=>$this->input->post('asiento_ticket'),
          "puerta_ingreso"=>$this->input->post('puerta_ingreso'),
          "cedula_cli"=>$this->input->post('cedula_cli'),
		      "nombre_equipo"=>$this->input->post('nombre_equipo'),
		      "nombre_estadio"=>$this->input->post('nombre_estadio')
        );

        $id_ticket=$this->input->post("id_ticket");
        if ($this->Ticket->actualizar($id_ticket,$datosActulizar)){
            redirect ('tickets/listado');
        }else {
           echo  "<h1>ERROR</h1>";
        }

    }

}


?>
