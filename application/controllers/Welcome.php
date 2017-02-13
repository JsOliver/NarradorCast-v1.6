<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('head_ud');
        $this->load->library('SessionsVerify');
        $this->load->model('cadastro_model');


    }
    //redirect(base_url('plataform'), 'refresh');

    public function index()
    {




        $dados['metas'] = [
            "title" => "NarradorCast | Seus podcasts favoritos em um só lugar.",
            "description" => "Seus podcasts favoritos em um só lugar.",
            "keywords" => "narradorcast, podcast,narrador,cast,narrador,melhores podcasts, plataforma,podcasters"
        ];
        $dados['title'] = 'NarradorCast | Seus podcasts favoritos em um só lugar.';
        $dados['page'] = 'landing';
        $dados['version'] = '1.6';
        $this->load->view('welcome/landing', $dados);

    }


    public function login()
    {

        $dados['metas'] = [
            "title" => "Entrar no NarradorCast | Seus podcasts favoritos em um só lugar.",
            "description" => "Seus podcasts favoritos em um só lugar.",
            "keywords" => "narradorcast, podcast,narrador,cast,narrador,melhores podcasts, plataforma,podcasters,login,entrar"
        ];
        $dados['title'] = 'Entrar no NarradorCast  | Seus podcasts favoritos em um só lugar.';
        $dados['page'] = 'login';
        $dados['version'] = '1.6';
        $this->load->view('welcome/acess/login', $dados);

    }

    public function ajaxContact()
    {


        $dados['nome'] = $_POST['nome'];
        $dados['email'] = $_POST['email'];
        $dados['mensagem'] = $_POST['mensagem'];
        if ($this->db->insert('contato_landing', $dados)):
            echo 11;
        else:
            echo 0;
        endif;

    }


    public function ajaxCadastro()
    {


        $dados['nome'] = $_POST['nome'];
        $dados['email'] = $_POST['email'];
        $dados['sobre'] = $_POST['sobre'];
        $dados['sobre'] = $_POST['senha'];

        if ($this->cadastro_model->cadastro(1, $_POST['email'], $_POST['senha'], '', $_POST['nome'], $_POST['sobrenome'], $_POST['sobre']) == 11):
            echo 11;
        else:
       echo $this->cadastro_model->cadastro(1, $_POST['email'], $_POST['senha'], '', $_POST['nome'], $_POST['sobrenome'], $_POST['sobre']);

        endif;



    }
}
