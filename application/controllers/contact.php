<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        /*
        $this->load->view('includes/header');	
        $this->load->view('contactview');
        $this->load->view('includes/footer');
         */
    }
    
    public function mailer()
    {	
        /*
        $this->load->library('email');
        
        $this->load->view('includes/header');
        
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $message = $this->input->post("message");

        $this->email->from($email, $name);
        $this->email->to('pondguys@metrowestwastergardens.com'); 

        $this->email->subject('Contact from MetroWestGardens.com');
        $this->email->message($message);	

        $this->email->send();

        echo $this->email->print_debugger();
        //$this->load->view('mailer');
        $this->load->view('includes/footer');
         */
    }
}