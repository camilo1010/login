<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrearCurso extends CI_Controller {

	public function index(){
		$this->load->view('CrearCurso');
	}

	function curso(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'nombre del curso', 'trim|required|min_length[3]|max_length[12]|xss_clean');

		if ($this->form_validation->run() == false) {
			$this->load->view('CrearCurso');
		} else {
			$this->load->model('');
			
		}
		
	}

}

/* End of file CrearCurso.php */
/* Location: ./application/controllers/CrearCurso.php */
