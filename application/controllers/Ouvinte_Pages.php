<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ouvinte_Pages extends CI_Controller
{

    public function index()
    {
        $this->load->view('ouvinte/home');
    }

}

?>