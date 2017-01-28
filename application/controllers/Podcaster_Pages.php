<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Podcaster_Pages extends CI_Controller
{  public function __construct(){
    parent::__construct();
    $this->load->library('head_ud');


}
    public function index()
    {

        $dados['channel'] = $this->uri->segment(3);
        $dados['page'] = 'estatisticas';
        $dados['version'] = '1.6';

        $this->load->view('podcaster/pages/estatisticas',$dados);
    }

    public function estatisticas()
    {

        $dados['channel'] = $this->uri->segment(3);
        $dados['page'] = 'estatisticas';
        $dados['version'] = '1.6';
        $this->load->view('podcaster/pages/estatisticas',$dados);
    }

    public function meuPodcast()
    {

        $dados['channel'] = $this->uri->segment(3);
        $dados['page'] = 'meu-podcast';
        $dados['version'] = '1.6';
        $this->load->view('podcaster/pages/meu-podcast',$dados);
    }

    public function redesSociais()
    {

        $dados['channel'] = $this->uri->segment(3);
        $dados['page'] = 'redes-sociais';
        $dados['version'] = '1.6';
        $this->load->view('podcaster/pages/redes/redes-sociais',$dados);
    }

}

?>