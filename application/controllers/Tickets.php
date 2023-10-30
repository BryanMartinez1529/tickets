<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {

	
	public function nuevo()
	{
		$this->load->view('tickets/nuevo');
	}
}
