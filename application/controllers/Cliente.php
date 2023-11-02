<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();

        $this->main_model_name = "m_cliente";
        $this->load->model($this->main_model_name, "main_model");
		$this->load->helper('url');
    }

	public function index()
	{
		$data['rta'] = $this->main_model->get_all_products();

		$info['titulo_page'] = "Productos";
		$info['js']["datatables"] = array("jquery.dataTables.min.js","dataTables.bootstrap.js","dataTables.buttons.min.js","buttons.bootstrap.min.js","jszip.min.js","pdfmake.min.js","vfs_fonts.js","buttons.html5.min.js","buttons.print.min.js","dataTables.fixedHeader.min.js","dataTables.keyTable.min.js","dataTables.responsive.min.js","responsive.bootstrap.min.js","dataTables.scroller.min.js");
		$info['css']['datatables'] = array("buttons.bootstrap.min.css","fixedHeader.bootstrap.min.css","jquery.dataTables.min.css","responsive.bootstrap.min.css","scroller.bootstrap.min.css");
		$modal = $this->load->view("producto/modal/producto",'',true);
        $data["modal"]=$modal;
		
		$this->load->view('principal/cabecera', $info);
		$this->load->view('cliente/index', $data);
		$this->load->view('principal/footer', $info);
	}
}
