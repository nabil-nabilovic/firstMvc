<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Film
 *
 * @author admin
 */
class Film extends CI_Controller {
    //put your code here
    
    public function home() {
        $this->load->view('film/home');
        
    }
    
  public function allFilm(){
    $this->load->model('FirstModel');
      $array['film'] = $this->FirstModel->getFilm();
      $this->load->view('Film/home',$array);
      
  }
  
 public function create()
{
   $this->load->library('javascript');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news Film';

    $this->form_validation->set_rules('Regista', 'Regista', 'required');
    $this->form_validation->set_rules('Titolo', 'Titolo', 'required');
     $this->form_validation->set_rules('AnnoProduzione', 'AnnoProduzione', 'required');
      $this->form_validation->set_rules('Genere', 'Genere', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        //$this->load->view('templates/header', $data);
        $this->load->view('film/create', $data);
        //$this->load->view('templates/footer');

    }
    else
    {
        $this->FirstModel->setFilm();
        //$this->load->view('film/success');
    }
}
}
