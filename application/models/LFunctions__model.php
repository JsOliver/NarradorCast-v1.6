<?php
class LFunctions__model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->db->reconnect();
        @session_start();
    }


    public function names($guide){

        if($guide == 1):
        //Titulos virão do banco de dados

        $names = ([
            'title' => 'Narrador Cast'
        ]);
            endif;

        if($guide == 2):
        //Titulos virão do banco de dados

        $names = ([
            'title' => 'Narrador Cast'
        ]);
            endif;

        return $names;
    }


}

?>