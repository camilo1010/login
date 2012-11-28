<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class consultaCurso extends CI_Controller {

	public function index(){
		$result['consulta'] = $this->Consulta_Matriculado();
		print_r($result);
		$this->load->view('consultaCurso', $result);
	}
	
	function Consulta_Matriculado(){
		//consulta
		$this->load->model('Capaon_consultas');
		$result = $this->Capaon_consultas->getConsulta_Matriculado($_POST['id']);
		return $result;
	}

}

/* End of file consultaCurso.php */
/* Location: ./application/controllers/consultaCurso.php */
