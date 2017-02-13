<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ouvinte_Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('head_ud');
        $this->load->library('SessionsVerify');

    }
    public function index()
    {
        if($this->load->SessionsVerify->logVer() == false):
            redirect(base_url(''), 'refresh');
        else:
        $this->load->view('ouvinte/home');
            endif;
    }

}

?>