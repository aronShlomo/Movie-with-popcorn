<?php
defined('BASEPATH') or exit('No direct script access allowed');





class user extends CI_Model{



    public function isUserExist($data){
        $result = $this->db->get_where('user', $data);
        if($result->num_rows() > 0){
               return true;
        }
        else{
            return false;
        }
    }

    public function isPasswordMatch($password){
        $query = $this->db->get_where('user', $password);
        if($query->row() == $password){
            return true;
        }
        else{
            return false;
        }
    }

    public function getUser($data){    
         $user = $this->db->get_where('user', $data);
          if($user->num_rows() > 0){
               return true;
          }else{
            return false;
          }


    }









    public function insert($data){
         return $this->db->insert('user', $data);
    }









}

