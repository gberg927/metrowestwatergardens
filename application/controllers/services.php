<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
            $this->load->view('includes/header');	
            $this->load->view('servicesview');
            $this->load->view('includes/footer');
	}
}