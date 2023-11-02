<?php

class M_cliente extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }    

    public function get_all() {
        $err['error_msg']  = "ERROR";
        $err['error_code'] = "0";
        $err['id']         = "";

        $rta = $this
                ->db
                ->select("*")
                ->from('cliente')
                ->get()
                ->result_array();
                
        return (!empty($rta[0]['id_cliente'])) ? $rta : NULL;
    }
}