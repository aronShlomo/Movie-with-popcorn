<?php
defined('BASEPATH') or exit('No direct script access allowed');


class movies extends CI_Model{


    public function insert_movie($data){
        $this->db->insert('add_to_list', $data , 1);
    }

    public function movie_exist($title){
          $this->db->where('original_title', $title);
          $query = $this->db->get_where('add_to_list');
          return $query->num_rows() > 0;
           
    }


    public function get_movies(){
          $query = $this->db->get('add_to_list');
          return $query->result();
    }


}
