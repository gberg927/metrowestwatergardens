<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
            $this->load->helper('directory');

            $mainPath = "./images/gallery/";
            $mainArr = directory_map($mainPath, 1);
            sort($mainArr);
            
            $this->load->view('includes/header');
            $this->load->view('gallery/galleryheader');
            
            foreach ($mainArr as $key) {
            	if (substr($key, 0, 1) != "_") {
	                $data['title'] = $key;
	                $data['images'] = array();
	                
	                $subArray = directory_map($mainPath . $key . "/", 1);
	                foreach ($subArray as $file => $value) {
                        if (trim($value) != "thumb") {
                            $image['title'] = preg_replace('/\\.[^.\\s]{3,4}$/', '', $value);;
                            $image['filename'] = $value;
                            $image['thumbnailFilename'] = "thumb_" . $value;
                            $dimensions = getimagesize($mainPath . $key . "/" .$value);
                            $image['width'] = $dimensions[0];
                            $image['height'] = $dimensions[1];
                            array_push($data['images'] , $image);
                        }
	                }
	                sort($data['images']);
                    $data['images'] = array_slice($data['images'], 0, 4);
	                $this->load->view('gallery/galleryview', $data);
	           }
            }
            $this->load->view('gallery/galleryfooter');
            $this->load->view('includes/footer');
	}
        
    public function individual()
    {
        $this->load->helper('directory');
        
        $mainPath = "./images/gallery/";
        $album = str_replace('-', ' ', $this->uri->segment(3, 0));
        
        $data['title'] = $album;
        $data['images'] = array();
        
        $subArray = directory_map($mainPath . $album . "/", 1);
        foreach ($subArray as $file => $value) {
            if (trim($value) != "thumb") {
                $image['title'] = preg_replace('/\\.[^.\\s]{3,4}$/', '', $value);;
                $image['filename'] = $value;
                $image['thumbnailFilename'] = "thumb_" . $value;
                $dimensions = getimagesize($mainPath . $album . "/" .$value);
                $image['width'] = $dimensions[0];
                $image['height'] = $dimensions[1];
                array_push($data['images'] , $image);
            }
        }
        sort($data['images']);
        $this->load->view('includes/header');
        $this->load->view('gallery/galleryheader');
        $this->load->view('gallery/galleryindividualview', $data);
        $this->load->view('gallery/galleryfooter');
        $this->load->view('includes/footer');
    }
}