<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




        //Pagina de inicio

        $route['home'] = 'Welcome/index';
        $route['login'] = 'Welcome/login';
        $route['cadastro'] = 'Welcome/cadastro';
        $route['sobre'] = 'Welcome/sobre';
        $route['contatoForm'] = 'Welcome/ajaxContact';
        $route['cadastroForm'] = 'Welcome/ajaxCadastro';
        $route['loginForm'] = 'Welcome/ajaxLogin';
        $route['logout'] = 'Welcome/logout';


    //Ouvinte Rotas das Paginas - Inicio

        $route['profile'] = 'ouvinte_pages/profile';
        $route['plataform'] = 'ouvinte_pages/index';
        $route['feed'] = 'ouvinte_pages/feed';
        $route['descubra'] = 'ouvinte_pages/descubra';
        $route['categoria'] = 'ouvinte_pages/categoria';
        $route['playlist'] = 'ouvinte_pages/playlist';
        $route['categoria/(.+)'] = 'ouvinte_pages/categoria/$1';
        $route['populares'] = 'ouvinte_pages/populares';
        $route['plataformpg'] = 'ouvinte_pages/plataform';
        $route['feedpg'] = 'ouvinte_pages/ajaxfeed';
        $route['categoriapg'] = 'ouvinte_pages/ajaxcategoria';
        $route['categoriadtpg/(.+)'] = 'ouvinte_pages/ajaxcategoriadt/$1';
        $route['descubrapg'] = 'ouvinte_pages/ajaxdescubra';
        $route['popularespg'] = 'ouvinte_pages/ajaxpopulares';
        $route['profilepg'] = 'ouvinte_pages/ajaxprofile';
        $route['playlistpg'] = 'ouvinte_pages/ajaxplaylist';
        $route['ch/(.+)'] = 'ouvinte_pages/ajaxchannel';
        $route['ouvir/(.+)'] = 'ouvinte_pages/episode/$1';
        $route['(@)(:any)'] = 'ouvinte_pages/channel/$1';

    //Podcaster Rotas das Paginas - Fim


        //Sem especificar canal, então os dados são do ultimo canal acessado
        $route['channel'] = 'Podcaster_Pages/index';
        $route['channel/estatisticas'] = 'Podcaster_Pages/estatisticas';
        $route['channel/meu-podcast'] = 'Podcaster_Pages/meuPodcast';
        $route['channel/redes-sociais'] = 'Podcaster_Pages/redesSociais';




//Podcaster Rotas das Paginas - Inicio
