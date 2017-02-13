<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




        //Pagina de inicio

        $route['login'] = 'Welcome/login';
        $route['cadastro'] = 'Welcome/cadastro';
        $route['sobre'] = 'Welcome/sobre';
        $route['contatoForm'] = 'Welcome/ajaxContact';
        $route['cadastroForm'] = 'Welcome/ajaxCadastro';


    //Ouvinte Rotas das Paginas - Inicio

        $route['plataform'] = 'ouvinte_pages/index';

    //Podcaster Rotas das Paginas - Fim


        //Sem especificar canal, então os dados são do ultimo canal acessado
        $route['channel'] = 'Podcaster_Pages/index';
        $route['channel/estatisticas'] = 'Podcaster_Pages/estatisticas';
        $route['channel/meu-podcast'] = 'Podcaster_Pages/meuPodcast';
        $route['channel/redes-sociais'] = 'Podcaster_Pages/redesSociais';




//Podcaster Rotas das Paginas - Inicio
