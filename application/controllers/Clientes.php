<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes  extends CI_Controller {

	
	public function nuevo()
	{	
		$this->load->view('header');
		$this->load->view('clientes/nuevo');
		$this->load->view('footer');
	}

	public function listado()
	{	
		$this->load->view('header');
		$this->load->view('clientes/listado');
		$this->load->view('footer');
	}

	public function editar()
	{	
		$this->load->view('header');
		$this->load->view('clientes/editar');
		$this->load->view('footer');
	}
}
