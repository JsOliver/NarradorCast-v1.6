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
            $dados['page'] = 'plataformpg';
            $dados['version'] = '1.6';
            $this->load->view('ouvinte/home',$dados);
            endif;
    }


    public function channel()
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
            $dados['page'] = 'channelpg';
            $dados['version'] = '1.6';
            $this->load->view('ouvinte/channel',$dados);
        endif;
    }

    public function feed()
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
            $dados['page'] = 'feedpg';
            $dados['version'] = '1.6';
            $this->load->view('ouvinte/feed',$dados);
        endif;
    }
    public function descubra()
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
            $dados['page'] = 'descubrapg';
            $dados['version'] = '1.6';
            $this->load->view('ouvinte/descubra',$dados);
        endif;
    }
  public function categoria()
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
            $dados['page'] = 'categoriapg';
            $dados['version'] = '1.6';
            $this->load->view('ouvinte/categoria',$dados);
        endif;
    }

  public function populares()
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
            $dados['page'] = 'popularespg';
            $dados['version'] = '1.6';
            $this->load->view('ouvinte/categoria',$dados);
        endif;
    }



    public function episode()
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
            $dados['page'] = 'episode';
            $dados['version'] = '1.6';
            $this->load->view('ouvinte/episode',$dados);
        endif;
    }

    public function plataform(){
        $this->load->view('ouvinte/ajax/plataform');
    }


    public function ajaxchannel(){
        $this->load->view('ouvinte/ajax/channel');
    }

    public function ajaxfeed(){
        $this->load->view('ouvinte/ajax/feed');
    }
    public function ajaxcategoria(){
        $this->load->view('ouvinte/ajax/categoria');
    }
    public function ajaxdescubra(){
        $this->load->view('ouvinte/ajax/descubra');
    }
    public function ajaxpopulares(){
        $this->load->view('ouvinte/ajax/populares');
    }
}

?>