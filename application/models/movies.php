<?php
defined('BASEPATH') or exit('No direct script access allowed');


class movies extends CI_Model{


    public function insert_movie($data){
        $this->db->insert('add_to_list', $data , 1);
    }


    public function get_movie($data){
          $get_movie = $this->db->get('add_to_list', $data);
          if($get_movie > 0){
             return $get_movie;
          } 
          else{
            return false;
          }
    }


}
