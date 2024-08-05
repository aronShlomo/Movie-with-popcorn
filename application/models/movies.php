<?php
defined('BASEPATH') or exit('No direct script access allowed');


class movies extends CI_Model
{


    public function insert($data)
    {
        $this->db->insert('add_to_list', $data, 1);
    }
    public function insert_favorite($data)
    {
        $this->db->insert('favorite', $data, 1);
    }


    // public function insertExist($value)
    // {
    //     $data = array('exist' => $value);
    //     $this->db->insert('add_to_list', $data);
    // }


    public function movie_exist_favorite($title)
    {
        $this->db->where('original_title', $title);
        $query = $this->db->get_where('favorite');
        return $query->num_rows() > 0;
    }


    public function movie_exist($title)
    {
        $this->db->where('original_title', $title);
        $query = $this->db->get_where('add_to_list');
        return $query->num_rows() > 0;
    }


    public function isMovieEmpty()
    {
        $query = $this->db->get('add_to_list');
        return $query->num_rows() === 0;
    }


    public function isMovieFavoriteEmpty()
    {
        $query = $this->db->get('favorite');
        return $query->num_rows() === 0;
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


    public function getFavoriteMoviesDB()
    {
        $query = $this->db->get('favorite');
        return $query->result();
    }

    public function delete($movie_id)
    {
        $this->db->where('movie_id', $movie_id);
        $this->db->delete('add_to_list');
    }

    public function delete_favorite($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('favorite');
    }
}
