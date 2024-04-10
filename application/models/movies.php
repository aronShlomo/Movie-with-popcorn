<?php
defined('BASEPATH') or exit('No direct script access allowed');


class movies extends CI_Model
{


    public function insert($data)
    {
        $this->db->insert('add_to_list', $data, 1);
    }


    public function movie_exist($title)
    {
        $this->db->where('original_title', $title);
        $query = $this->db->get_where('add_to_list');
        return $query->num_rows() > 0;
    }
    public function tv_exist($name)
    {
        $this->db->where('name', $name);
        $query = $this->db->get_where('add_to_list');
        return $query->num_rows() > 0;
    }

    public function get()
    {
        $query = $this->db->get('add_to_list');
        return $query->result();
    }

    public function delete($movie_id){
          $this->db->where('movie_id', $movie_id);
          $this->db->delete('add_to_list');
    }

  
}
