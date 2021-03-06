<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Head_ud
{


    private $quebra = "\n";

    public function css($guide, $version)
    {

        if ($guide == 0):

            $return = '
            
             <!-- CSS -->
        <link rel="stylesheet" href="' . base_url('assets/templates/general/' . $version . '/font-awesome-4.7.0/css/font-awesome.css') . '">
        <link rel="stylesheet" href="' . base_url('assets/templates/landing/' . $version . '/bootstrap/css/bootstrap.min.css') . '">
        <link rel="stylesheet" href="' . base_url('assets/templates/landing/' . $version . '/css/animate.css') . '">
		<link rel="stylesheet" href="' . base_url('assets/templates/landing/' . $version . '/css/form-elements.css') . '">
        <link rel="stylesheet" href="' . base_url('assets/templates/landing/' . $version . '/css/style.css') . '">
        <link rel="stylesheet" href="' . base_url('assets/templates/landing/' . $version . '/css/media-queries.css') . '">
        <link rel="stylesheet" href="' . base_url('assets/templates/landing/' . $version . '/css/contact-forms.css') . '">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" ></script >
            <script src = "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" ></script >
        <![endif]-->
        <!--Favicon and touch icons-->
        <link rel = "shortcut icon" href = "' . base_url('assets/ico/favicon.png') . '" >
        <link rel = "apple-touch-icon-precomposed" sizes = "144x144" href = "' . base_url('assets/templates/landing/' . $version . '/ico/apple-touch-icon-144-precomposed.png') . '" >
        <link rel = "apple-touch-icon-precomposed" sizes = "114x114" href = "' . base_url('assets/templates/landing/' . $version . '/ico/apple-touch-icon-114-precomposed.png') . '" >
        <link rel = "apple-touch-icon-precomposed" sizes = "72x72" href = "' . base_url('assets/templates/landing/' . $version . '/ico/apple-touch-icon-72-precomposed.png') . '" >
        <link rel = "apple-touch-icon-precomposed" href = "' . base_url('assets/templates/landing/' . $version . '/ico/apple-touch-icon-57-precomposed.png') . '" >


        ';
        endif;


        if ($guide == 1):

            $return = '
            
            <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/jPlayer/jplayer.flat.css" type="text/css" />
    <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'css/animate.css" type="text/css" />
    <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'css/font.css" type="text/css" />
    <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'css/app.css" type="text/css" />
    <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'css/apps.css" type="text/css" />
    <link rel="stylesheet" href="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'css/style.css" type="text/css" />
            
    <script src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/ie/html5shiv.js"></script>
    <script src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/ie/respond.min.js"></script>
    <script src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/ie/excanvas.js"></script>
           
            ';

        endif;


        if ($guide == 2):


            $return = '
                         <!-- Estilos -->

            <link href="' . base_url('assets/templates/podcaster/' . $version . '/css/style.css') . '" rel="stylesheet">
          
                      <!-- Plugins -->

           <link href="' . base_url('assets/templates/podcaster/' . $version . '/css/bootstrap.min.css') . '" rel="stylesheet">
             <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
                      ';

        endif;

        return ($return);

    }

    public function js($guide, $version)
    {
        if ($guide == 0):

            $return = '
            
        <!-- Javascript -->
        <script src="' . base_url('assets/templates/landing/' . $version . '/js/jquery-1.11.1.min.js') . '"></script>
        <script src="' . base_url('assets/templates/landing/' . $version . '/bootstrap/js/bootstrap.min.js') . '"></script>
        <script src="' . base_url('assets/templates/landing/' . $version . '/js/jquery.validate.js') . '"></script>
        <script src="' . base_url('assets/templates/landing/' . $version . '/js/jquery.backstretch.min.js') . '"></script>
        <script src="' . base_url('assets/templates/landing/' . $version . '/js/wow.min.js') . '"></script>
        <script src="' . base_url('assets/templates/landing/' . $version . '/js/retina-1.1.0.min.js') . '"></script>
        <script src="' . base_url('assets/templates/landing/' . $version . '/js/scripts.js') . '"></script>
        <script src="' . base_url('assets/templates/landing/' . $version . '/js/contato.js') . '"></script>
        <!--[if lt IE 10]>
            <script src="' . base_url('assets/templates/landing/' . $version . '/js/placeholder.js') . '"></script>
        <![endif]-->

            ';

        endif;


        if ($guide == 1):

            $return = '
            
       
                         <script src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/bootstrap.js"></script>
  <!-- App -->
  <script src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/app.js"></script>  
  <script src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/app.plugin.js"></script>
  <script type="text/javascript" src="' . base_url('assets/templates/ouvinte/' . $version . '/') . 'js/jPlayer/jquery.jplayer.min.js"></script>
                                   
          
            ';

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

    public function meta($guide, $array)
    {
        if ($guide == 0):
            $charset = '<meta charset="UTF-8" />' . $this->quebra;

            if (array_key_exists('title', $array) and !empty($array['title'])):

                $title = '<meta name="title" content="' . $array['title'] . '" />' . $this->quebra;
                $title2 = '<meta property="og:title" content="' . $array['title'] . '">' . $this->quebra;
            else:

                $title = '';
                $title2 = '';


            endif;

            if (array_key_exists('description', $array) and !empty($array['description'])):


                $description = '<meta name="description" content="' . $array['description'] . '" />' . $this->quebra;
                $description2 = '<meta property="og:description" content="' . $array['description'] . '">' . $this->quebra;

            else:
                $description = '';
                $description2 = '';

            endif;

            if (array_key_exists('keywords', $array) and !empty($array['keywords'])):

                $keywords = '<meta name="keywords" content="' . $array['keywords'] . '" />' . $this->quebra;

            else:
                $keywords = '';


            endif;

            $return = $title . $title2 . $description . $description2 . $keywords;

        endif;


        if ($guide == 1):
            $charset = '<meta charset="UTF-8" />' . $this->quebra;

            if (array_key_exists('title', $array) and !empty($array['title'])):

                $title = '<meta name="title" content="' . $array['title'] . '" />' . $this->quebra;
                $title2 = '<meta property="og:title" content="' . $array['title'] . '">' . $this->quebra;
            else:

                $title = '';
                $title2 = '';


            endif;

            if (array_key_exists('description', $array) and !empty($array['description'])):


                $description = '<meta name="description" content="' . $array['description'] . '" />' . $this->quebra;
                $description2 = '<meta property="og:description" content="' . $array['description'] . '">' . $this->quebra;

            else:
                $description = '';
                $description2 = '';

            endif;

            if (array_key_exists('keywords', $array) and !empty($array['keywords'])):

                $keywords = '<meta name="keywords" content="' . $array['keywords'] . '" />' . $this->quebra;

            else:
                $keywords = '';


            endif;

            $return = $title . $title2 . $description . $description2 . $keywords;

        endif;


        if ($guide == 2):
            $charset = '<meta charset="UTF-8" />' . $this->quebra;

            if (array_key_exists('title', $array) and !empty($array['title'])):

                $title = '<meta name="title" content="' . $array['title'] . '" />' . $this->quebra;
                $title2 = '<meta property="og:title" content="' . $array['title'] . '">' . $this->quebra;
            else:

                $title = '';
                $title2 = '';


            endif;

            if (array_key_exists('description', $array) and !empty($array['description'])):


                $description = '<meta name="description" content="' . $array['description'] . '" />' . $this->quebra;
                $description2 = '<meta property="og:description" content="' . $array['description'] . '">' . $this->quebra;

            else:
                $description = '';
                $description2 = '';

            endif;

            if (array_key_exists('keywords', $array) and !empty($array['keywords'])):

                $keywords = '<meta name="keywords" content="' . $array['keywords'] . '" />' . $this->quebra;

            else:
                $keywords = '';


            endif;

            $return = $title . $title2 . $description . $description2 . $keywords;

        endif;
        return $return;


    }

    public function head($guide, $version, $array, $title)
    {

        if ($guide == 0):


            $return = '<!DOCTYPE html>' . $this->quebra . '
                <html lang="pt-br">' . $this->quebra . '<head>' . $this->quebra . $this->meta($guide, $array) . $this->quebra . '
               <title>' . $title . '</title>' . $this->quebra .
                $this->css(0, $version) . $this->quebra .

                '
              </head> 
               ';


        endif;

        if ($guide == 1):

            $return = '<!DOCTYPE html>' . $this->quebra . '
                <html class="app" lang="pt-br" 
                
                >' . $this->quebra . '<head>' . $this->quebra . $this->meta($guide, $array) . $this->quebra . '
               <title>' . $title . '</title>' . $this->quebra .
                $this->css($guide, $version) . $this->quebra .
                '
              </head> 
               ';
        endif;


        if ($guide == 2):

            $return = '<!DOCTYPE html>' . $this->quebra . '
                <html lang="pt-br">' . $this->quebra . '<head>' . $this->quebra . $this->meta($guide, $array) . $this->quebra . '
               <title>' . $title . '</title>' . $this->quebra .
                $this->css(2, $version) . $this->quebra .
                '
              </head> 
               ';


        endif;

        return ($return);
    }


}

?>

