<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Head_ud
{


    private $quebra = "\n";

    public function css($guide,$version)
    {

        if ($guide == 0):

            $return = '
            
             <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">        
        <link rel="stylesheet" href="'.base_url('assets/templates/general/'.$version.'/font-awesome-4.7.0/css/font-awesome.css').'">
        <link rel="stylesheet" href="'.base_url('assets/templates/landing/'.$version.'/bootstrap/css/bootstrap.min.css').'">
        <link rel="stylesheet" href="'.base_url('assets/templates/landing/'.$version.'/typicons/typicons.min.css').'">
        <link rel="stylesheet" href="'.base_url('assets/templates/landing/'.$version.'/css/animate.css').'">
		<link rel="stylesheet" href="'.base_url('assets/templates/landing/'.$version.'/css/form-elements.css').'">
        <link rel="stylesheet" href="'.base_url('assets/templates/landing/'.$version.'/css/style.css').'">
        <link rel="stylesheet" href="'.base_url('assets/templates/landing/'.$version.'/css/media-queries.css').'">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" ></script >
            <script src = "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" ></script >
        <![endif]-->
        <!--Favicon and touch icons-->
        <link rel = "shortcut icon" href = "'.base_url('assets/ico/favicon.png').'" >
        <link rel = "apple-touch-icon-precomposed" sizes = "144x144" href = "'.base_url('assets/templates/landing/'.$version.'/ico/apple-touch-icon-144-precomposed.png').'" >
        <link rel = "apple-touch-icon-precomposed" sizes = "114x114" href = "'.base_url('assets/templates/landing/'.$version.'/ico/apple-touch-icon-114-precomposed.png').'" >
        <link rel = "apple-touch-icon-precomposed" sizes = "72x72" href = "'.base_url('assets/templates/landing/'.$version.'/ico/apple-touch-icon-72-precomposed.png').'" >
        <link rel = "apple-touch-icon-precomposed" href = "'.base_url('assets/templates/landing/'.$version.'/ico/apple-touch-icon-57-precomposed.png').'" >


        ';
        endif;


        if ($guide == 1):


        endif;


        if ($guide == 2):


            $return = '
                         <!-- Estilos -->

            <link href="' . base_url('assets/templates/podcaster/'.$version.'/css/style.css').'" rel="stylesheet">
          
                      <!-- Plugins -->

           <link href="'.base_url('assets/templates/podcaster/'.$version.'/css/bootstrap.min.css').'" rel="stylesheet">
             <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
                      ';

        endif;

        return ($return);

    }

    public function js($guide,$version)
    {
        if ($guide == 0):

            $return = '
            
        <!-- Javascript -->
        <script src="'.base_url('assets/templates/landing/'.$version.'/js/jquery-1.11.1.min.js').'"></script>
        <script src="'.base_url('assets/templates/landing/'.$version.'/bootstrap/js/bootstrap.min.js').'"></script>
        <script src="'.base_url('assets/templates/landing/'.$version.'/js/jquery.backstretch.min.js').'"></script>
        <script src="'.base_url('assets/templates/landing/'.$version.'/js/wow.min.js').'"></script>
        <script src="'.base_url('assets/templates/landing/'.$version.'/js/retina-1.1.0.min.js').'"></script>
        <script src="'.base_url('assets/templates/landing/'.$version.'/js/scripts.js').'"></script>
        
        <!--[if lt IE 10]>
            <script src="'.base_url('assets/templates/landing/'.$version.'/js/placeholder.js').'"></script>
        <![endif]-->

            ';

        endif;


        if ($guide == 1):


        endif;


        if ($guide == 2):

            //Plugins
            $return = '
            
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
                     ';

            $return = '
            <script src="https://use.fontawesome.com/802fca7447.js"></script>
                  ';

        endif;

        return ($return);

    }

    public function meta($guide)
    {


    }

    public function head($guide,$version)
    {

        if ($guide == 0):


            $return = '<!DOCTYPE html>' . $this->quebra . '
                <html lang="pt-br">' . $this->quebra . '<head>' . $this->quebra . $this->meta(0) . $this->quebra . '
               <title> Narrador Cast</title>' . $this->quebra.
                $this->css(0,$version) . $this->quebra . $this->js(0,$version) . $this->quebra .
                '
              </head> 
               ';



        endif;

      if ($guide == 1):


        endif;


        if ($guide == 2):

            $return = '<!DOCTYPE html>' . $this->quebra . '
                <html lang="pt-br">' . $this->quebra . '<head>' . $this->quebra . $this->meta(2) . $this->quebra . '
               <title> Narrador Cast</title>' . $this->quebra.
                $this->css(2,$version) . $this->quebra . $this->js(2,$version) . $this->quebra .
                '
              </head> 
               ';


        endif;

        return ($return);
    }


}

?>

