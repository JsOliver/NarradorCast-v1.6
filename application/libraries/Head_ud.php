<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Head_ud
{


    private $quebra = "\n";
    private $version = '1.6';

    public function css($guide)
    {

        if ($guide == 1):


        endif;


        if ($guide == 2):


            $return = '
                         <!-- Estilos -->

            <link href="' . base_url('assets/templates/podcaster/css/style.css?version=') . $this->version . '' . '" rel="stylesheet">
          
                      <!-- Plugins -->

           <link href="' . base_url('assets/templates/podcaster/css/bootstrap.min.css') . '" rel="stylesheet">
             <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
                      ';

        endif;

        return ($return);

    }

    public function js($guide)
    {
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

    public function head($guide)
    {

        if ($guide == 1):


        endif;


        if ($guide == 2):

            $return = '<!DOCTYPE html>' . $this->quebra . '
                <html lang="pt-br">' . $this->quebra . '<head>' . $this->quebra . $this->meta(2) . $this->quebra . '
               <title> Narrador Cast</title>' . $this->quebra.
                $this->css(2) . $this->quebra . $this->js(2) . $this->quebra .
                '
              </head> 
               ';


        endif;

        return ($return);
    }


}

?>

