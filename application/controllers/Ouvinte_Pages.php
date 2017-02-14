<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ouvinte_Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('head_ud');
        $this->load->model('sessionsverify_model');

    }
    public function index()
    {
        if($this->sessionsverify_model->logver() == false):
            redirect(base_url(''), 'refresh');
        else:
            $dados['metas'] = [
                "title" => "NarradorCast | Seus podcasts favoritos em um só lugar.",
                "description" => "Seus podcasts favoritos em um só lugar.",
                "keywords" => "narradorcast, podcast,narrador,cast,narrador,melhores podcasts, plataforma,podcasters"
            ];
            $dados['title'] = 'NarradorCast | Seus podcasts favoritos em um só lugar.';
            $dados['page'] = 'landing';
            $dados['version'] = '1.6';
            $this->load->view('ouvinte/home',$dados);
            endif;
    }

}

?>