<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Installation extends CI_Controller {

	public function index()
	{
            $this->load->view('includes/header');	
            $this->load->view('installationview');
            $this->load->view('includes/footer');
	}
}