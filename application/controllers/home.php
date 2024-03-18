<?php
defined('BASEPATH') or exit('No direct script access allowed');


class home extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('TMDB');
        $this->load->library('session');
    }


    public function index()
    {
        if ($movie_id = $this->input->get('movieId')) {
            $get_movie_id = $this->tmdb->get_movie($movie_id, 'get_movie');
            $movie = $this->session->set_userdata('movieId', $get_movie_id);
            $this->session->unset_userdata('tvId');
            $this->load->view('home', $movie);
        } elseif ($tv_id = $this->input->get('tvId')) {
            $get_tv_id = $this->tmdb->get_tv($tv_id, 'get_tv');
            $tv = $this->session->set_userdata('tvId', $get_tv_id);
            $this->session->unset_userdata('movieId');
            $this->load->view('home', $tv);
        } else {
            $this->session->unset_userdata('movieId');
            $this->session->unset_userdata('tvId');
            $this->load->view('home');
        }
    }


    public function movies()
    {
        $data['results'] = $this->tmdb->get_all_movies();
        $this->load->view('movies',  $data);
    }



    public function trailer()
    {

        if ($trailer_movie = $this->input->get('trailer_movie_id')) {
            $get_trailer['trailer'] = $this->tmdb->get_movie_videos($trailer_movie);
            $this->load->view('trailer', $get_trailer);
            $this->session->unset_userdata('tvId');
        } elseif ($trailer_tv = $this->input->get('trailer_tv_id')) {
            $get_trailer = $this->tmdb->get_tv_videos($trailer_tv);
            $tv = $this->session->set_userdata('trailer_tv', $get_trailer);
            $this->load->view('trailer');
            $this->session->unset_userdata('movieId');

        }
    }


    public function movieOnline()
    {
        $watch_id = $this->input->get('watchProviderID');
        $watch_provider['results'] = $this->tmdb->watch_provider_movie($watch_id);
        $this->load->view('provider', $watch_provider);
    }

    public function tv()
    {
        for ($i = 1; $i < 5; $i++) {
            $tv['result_tv'] = $this->tmdb->get_all_tv($i);
            $this->load->view('tv', $tv);
        }
    }
}
