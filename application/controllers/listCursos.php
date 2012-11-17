<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListCursos extends CI_Controller {

	public function index(){
		$this->load->model('Capaon_consultas');
		$result['result2'] = $this->Capaon_consultas->getCursos();		
		$this->load->view('listCursos', $result);		
	}

}

/* End of file listCursos.php */
/* Location: ./application/controllers/listCursos.php */
