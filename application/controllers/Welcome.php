<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function hello()
	{
	 $this->load->model('FirstModel');
         $arr['nom']=$this->FirstModel->getName();
          $this->load->view('firstView',$arr);
	
	 

	}
        
        public function getView() {
            $this->load->view('Welcome/firstView');
        }
        
        public function create() {
            $this->load->view('create');
        }
       
        public function getFilm() {
         $this->load->model('FirstModel');
        $array['film']=$this->FirstModel->getFilm();
        // print_r($array);
        // 
         $this->load->view('firstView', $array);
        }
}
