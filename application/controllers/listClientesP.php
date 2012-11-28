<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListClientesP extends CI_Controller {

	public function index(){
		$result['consulta'] = $this->Consulta_Matriculado();
		$this->load->view('listClientesP', $result);
	}
	
	function Consulta_Matriculado(){
		//consulta id de curso
		$this->load->model('Capaon_consultas');
		$result = $this->Capaon_consultas->getConsulta_Potencial();
		return $result;
	}
}

/* End of file listClientesP.php */
/* Location: ./application/controllers/listClientesP.php */
