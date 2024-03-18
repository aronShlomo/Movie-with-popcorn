<?php 
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') or exit('No direct script access allowed'); 


require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';


class apiController extends RestController {


    public function index_get(){

         echo 'Hello World';
    }


}

