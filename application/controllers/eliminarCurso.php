<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eliminarCurso extends CI_Controller {

	public function index(){
		$this->load->model('capaon_consultas');
		$this->capaon_consultas->eliminarCurso($_POST['id']);
		redirect('listCursos');
	}

}

/* End of file eliminarCurso.php */
/* Location: ./application/controllers/eliminarCurso.php */
