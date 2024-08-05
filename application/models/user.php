<?php
defined('BASEPATH') or exit('No direct script access allowed');





class user extends CI_Model
{




    public function isPasswordMatch($password)
    {
        $result = $this->db->get_where("user", $password);
        if ($result->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function isUserExist($data)
    {
        $result = $this->db->get_where('user', $data);
        if ($result->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // public function isPasswordMatch($lastname , $password){
    //     $this->db->select('password');
    //     $this->db->where('lastname', $lastname);
    //     $query = $this->db->get('user');
    //     if ($query->num_rows() === 1) {
    //         $hashed_password = $query->row()->password;
    //         return password_verify($password, $hashed_password);
    //     }
    //     else{
    //         return false;
    //     }
    // }

    public function getUser($data)
    {
        $user = $this->db->get_where('user', $data);
        if ($user->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function insert($data)
    {
        return $this->db->insert('user', $data);
    }
}
