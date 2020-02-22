<?php
class FirstModel extends CI_Model {

	public function getName() {
        return ["nom"=>"chfali"];
	}
 	
         public function getFilm() {
             $this->load->database();
             //$query =  $this->db->query("select * from film");
             $query =  $this->db->get('film');
             $data=$query->result_array();
             return $data;
         } 
}

?>