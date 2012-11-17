<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class consultaCurso extends CI_Controller {

	public function index(){
		//consulta
		print_r($_POST);
		$this->load->view('consultaCurso');
	}

}

/* End of file consultaCurso.php */
/* Location: ./application/controllers/consultaCurso.php */
