<?php

class M_producto extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }    

    public function get_all_products() {
        $err['error_msg']  = "ERROR";
        $err['error_code'] = "0";
        $err['id']         = "";

        $rta = $this
                ->db
                ->select("*")
                ->from('producto')
                ->get()
                ->result_array();
                
        return (!empty($rta[0]['id_producto'])) ? $rta : NULL;
    }

    public function update($data = NULL) {
        $id = 0;
        if(!empty($data['id_producto'])) {        
            $id = ($this->db->insert('producto', $data)) ? ($this->db->insert_id()) : (FALSE);
        } else {
            $this->db->where('id_pid_productoerfil', $data['id_producto']);
            $id = ($this->db->update('tb_perfil', $data)) ? ($err['error_code']) : ("0");
        }
        return $id;
    }
}