<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
            $this->load->helper('directory');
            
            $mainPath = "./images/gallery/";
            $mainArr = directory_map($mainPath, 1);
            sort($mainArr);
            
            $this->load->view('includes/header');
            $this->load->view('includes/grid9header');
            
            foreach ($mainArr as $key) {
            	if (substr($key, 0, 1) != "_") {
	                $data['title'] = $key;
	                $data['images'] = array();
	                
	                $subArray = directory_map($mainPath . $key . "/", 1);
	                foreach ($subArray as $file => $value) {
	                    if (trim($value) != "thumb") {
		                array_push($data['images'] , $value);
		            }
	                }
	                sort($data['images']);
	                $this->load->view('galleryview', $data);
	        }
            }
            
            $this->load->view('includes/grid9footer');
            $this->load->view('includes/footer');
	}
        
        public function individual()
        {
            $this->load->helper('directory');
            
            $mainPath = "./images/gallery/";
            $album = str_replace('-', ' ', $this->uri->segment(3, 0));
            
            $data['title'] = $album;
            $data['images'] = array();
            
            $subArray = directory_map($mainPath . $album. "/", 1);
            foreach ($subArray as $file => $value) {
                if (trim($value) != "thumb") {
                    array_push($data['images'] , $value);
                }
            }
            
            sort($data['images']);
            
            $this->load->view('includes/header');
            $this->load->view('includes/grid9header');
            $this->load->view('galleryindividualview', $data);
            $this->load->view('includes/grid9footer');
            $this->load->view('includes/footer');
        }
}