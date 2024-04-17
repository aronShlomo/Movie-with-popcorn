<?php
defined('BASEPATH') or exit('No direct script access allowed');


class home extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('TMDB');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('html');


    }

    public function closepopup(){
        $this->session->set_userdata('guest', '');
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

    public function login()
    {
        $this->load->view('login');
    }

    public function signup()
    {
        $this->load->view('signup');
    }


    public function user()
    {
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'All fields are required');
            header('Location: login');
            exit();
        }
        $data['lastname'] = $this->input->post('lastname');
        $this->load->model('user');
        if (!$this->user->isUserExist($data)) {
            $this->session->set_flashdata('error', 'User does not exist');
            header('Location: login');
            exit();
        }
        // $dataPass['password'] = $this->input->post('password');
        // $this->load->model('user');
        // if (!$this->user->isPasswordMatch($dataPass)) {
        //     $this->session->set_flashdata('error', 'Password does not match what in the system!! Please try again!!!');
        //     header('Location: login');
        //     exit();
        // }
        $this->user->getUser($data);
        $this->session->set_userdata('user',  $data);
        header('Location: index');
    }


    public function register()
    {
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Password',  'required|matches[password]');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Feilds cannot be empty');
            header('Location: signup');
            if ($password != $confirm_password) {
                $this->session->set_flashdata('error', 'Passwords do not match');
                header('Location: signup');
                exit();
            }
            exit();
        }

        $data['lastname'] = $this->input->post('lastname');
        $this->load->model('user');
        if ($this->user->isUserExist($data)) {
            $this->session->set_flashdata('error', 'User already exists');
            header('Location: signup');
            exit();
        }
        $data = $this->input->post();
        $this->load->model('user');
        $this->user->insert($data);

        $this->session->set_userdata('user', $data);
        header('Location: index');
    }




    public function logout()
    {
        $this->session->unset_userdata('user');
        header('Location: index');
    }




    public function mylist()
    {
        if ($movie_id = $this->input->get('addmovietolist')) {
            $add_movie = $this->tmdb->get_movie($movie_id, 'get_movie');
            $data = array(
                'poster_path' => $add_movie['poster_path'],
                'original_title' => $add_movie['original_title'],
                'overview' => $add_movie['overview'],
            );
            $this->load->model('movies');
            if (!$this->movies->movie_exist($data['original_title'])) {
                $this->movies->insert($data);
            } else {
                $movie_id = $this->input->get('addmovietolist');
                $this->session->set_userdata('movieId_exist', $movie_id);
                header('Location: movies');
                exit;
            }
        }

        if ($tv_id = $this->input->get('addtvtolist')) {
            $add_tv = $this->tmdb->get_tv($tv_id, 'get_tv');
            $data = array(
                'poster_path' => $add_tv['poster_path'],
                'name' => $add_tv['name'],
                'overview' => $add_tv['overview'],
            );
            $this->load->model('movies');
            if (!$this->movies->tv_exist($data['name'])) {
                $this->movies->insert($data);
            } else {
                $movie_id = $this->input->get('addmovietolist');
                $this->session->set_userdata('movieId_exist', $movie_id);
                header('Location: tv');
                exit;
            }
        }


        if ($movie_id = $this->input->get('addHomeMovieToList')) {
            $add_movie = $this->tmdb->get_movie($movie_id, 'get_movie');
            $data = array(
                'poster_path' => $add_movie['poster_path'],
                'original_title' => $add_movie['original_title'],
                'overview' => $add_movie['overview'],
            );
            $this->load->model('movies');
            if (!$this->movies->movie_exist($data['original_title'])) {
                $this->movies->insert($data);
            } else {
                $movie_id = $this->input->get('addHomeMovieToList');
                $this->session->set_userdata('homemovieId_exist', $movie_id);
                header('Location: index');
                exit;
            }
        }

        if ($tv_id = $this->input->get('addHomeTVToList')) {
            $add_tv = $this->tmdb->get_tv($tv_id, 'get_tv');
            $data = array(
                'poster_path' => $add_tv['poster_path'],
                'name' => $add_tv['name'],
                'overview' => $add_tv['overview'],
            );
            $this->load->model('movies');
            if (!$this->movies->tv_exist($data['name'])) {
                $this->movies->insert($data);
            } else {
                $tv_id = $this->input->get('addHomeTVToList');
                $this->session->set_userdata('hometvId_exist', $tv_id);
                header('Location: index');
                exit;
            }
        }

        $this->load->model('movies');
        $movieTV['results_list'] = $this->movies->get();
        $this->load->view('mylist', $movieTV);
    }




 




    public function movies()
    {

        if ($search = $this->input->get('search')) {
            $query['results'] = $this->tmdb->search_movie($search);
            $this->load->view('movies', $query);
        } else {
            $data['results'] = $this->tmdb->get_all_movies();
            $this->load->view('movies',  $data);
        }
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


    public function online()
    {
        if ($watch_id = $this->input->get('getMovieProvider')) {
            $watch_provider['providersMovie'] = $this->tmdb->watch_provider_movie($watch_id);
            $this->load->view('provider', $watch_provider);
        } elseif ($watch_id = $this->input->get('getTvProvider')) {
            $watch_provider['providersTV'] = $this->tmdb->watch_provider_tv($watch_id);
            $this->load->view('provider', $watch_provider);
        }
    }






    public function tv()
    {

        if ($search = $this->input->get('search')) {
            $query['results'] = $this->tmdb->search_tv($search);
            $this->load->view('tv', $query);
        } else {

            $tv['result_tv'] = $this->tmdb->get_all_tv();
            $this->load->view('tv', $tv);
        }
    }


    public function delete()
    {
        $delete = $this->input->get('delete_card');
        $this->load->model('movies');
        $this->movies->delete($delete);
        // return redirect('home/mylist');
        $this->session->set_flashdata('deleted_card', $delete);
        header('Location: mylist');
    }
}
