<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('head_ud');


    }
	public function index()
	{


        $dados['page'] = 'landing';
        $dados['version'] = '1.6';
		$this->load->view('welcome/landing',$dados);
	}
}
