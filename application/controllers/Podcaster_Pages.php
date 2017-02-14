<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Podcaster_Pages extends CI_Controller
{  public function __construct(){
    parent::__construct();
    $this->load->library('head_ud');


}
    public function index()
    {

        $dados['metas'] = [
            "title" => "NarradorCast | Seus podcasts favoritos em um só lugar.",
            "description" => "Seus podcasts favoritos em um só lugar.",
            "keywords" => "narradorcast, podcast,narrador,cast,narrador,melhores podcasts, plataforma,podcasters"
        ];
        $dados['title'] = 'NarradorCast | Seus podcasts favoritos em um só lugar.';
        $dados['channel'] = $this->uri->segment(3);
        $dados['page'] = 'estatisticas';
        $dados['version'] = '1.6';

        $this->load->view('podcaster/pages/estatisticas',$dados);
    }

    public function estatisticas()
    {
        $dados['metas'] = [
            "title" => "NarradorCast | Seus podcasts favoritos em um só lugar.",
            "description" => "Seus podcasts favoritos em um só lugar.",
            "keywords" => "narradorcast, podcast,narrador,cast,narrador,melhores podcasts, plataforma,podcasters"
        ];
        $dados['title'] = 'NarradorCast | Seus podcasts favoritos em um só lugar.';
        $dados['channel'] = $this->uri->segment(3);
        $dados['page'] = 'estatisticas';
        $dados['version'] = '1.6';
        $this->load->view('podcaster/pages/estatisticas',$dados);
    }

    public function meuPodcast()
    {
        $dados['metas'] = [
            "title" => "NarradorCast | Seus podcasts favoritos em um só lugar.",
            "description" => "Seus podcasts favoritos em um só lugar.",
            "keywords" => "narradorcast, podcast,narrador,cast,narrador,melhores podcasts, plataforma,podcasters"
        ];
        $dados['title'] = 'NarradorCast | Seus podcasts favoritos em um só lugar.';
        $dados['channel'] = $this->uri->segment(3);
        $dados['page'] = 'meu-podcast';
        $dados['version'] = '1.6';
        $this->load->view('podcaster/pages/meu-podcast',$dados);
    }

    public function redesSociais()
    {
        $dados['metas'] = [
            "title" => "NarradorCast | Seus podcasts favoritos em um só lugar.",
            "description" => "Seus podcasts favoritos em um só lugar.",
            "keywords" => "narradorcast, podcast,narrador,cast,narrador,melhores podcasts, plataforma,podcasters"
        ];
        $dados['title'] = 'NarradorCast | Seus podcasts favoritos em um só lugar.';
        $dados['channel'] = $this->uri->segment(3);
        $dados['page'] = 'redes-sociais';
        $dados['version'] = '1.6';
        $this->load->view('podcaster/pages/redes/redes-sociais',$dados);
    }

}

?>