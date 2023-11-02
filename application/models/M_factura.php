<?php

class M_factura extends CI_Model
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
                ->from('factura')
                ->get()
                ->result_array();
                
        return (!empty($rta[0]['id_factura'])) ? $rta : NULL;
    }
}