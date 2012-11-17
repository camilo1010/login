<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editinfoempresa extends CI_Controller {

	public function index(){
		$result['info'] = $this->getInfoEmpresa();
		$this->load->view('editinfoempresa', $result);
	}

	function getInfoEmpresa(){
		$this->load->model('Capaon_consultas');
		$result = $this->Capaon_consultas->getInfoEmpresa();
		return $result;
	}

	function Guardar(){		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mision', 'Mision', 'required|min_length[3]|max_length[500]');
		$this->form_validation->set_rules('vision', 'Vision', 'required|min_length[3]|max_length[500]');
		$this->form_validation->set_rules('quienesomos', 'Quiene Somos', 'required|min_length[10]|max_length[500]');
		$this->form_validation->set_error_delimiters('</br></br><div style="width:225px; color:red;" class="alert alert-error">', '</div>');
		
		if ($this->form_validation->run() == False) {
			$this->load->view('editinfoempresa');			
		}
		else{
			$this->load->model('capaon_registro');
			$success = $this->capaon_registro->registro_info_Empresa();

			if ($success) {
				$datos['correcto'] = true;
				redirect('home');
			
			} else {
				$datos['incorrecto'] = true;
				$this->load->view('editinfoempresa', $datos);				
			}
			
		}
	}

	function Actualizar(){
		$datos['info'] = $this->getInfoEmpresa();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mision', 'Mision', 'trim|required|min_length[3]|max_length[500]|xss_clean');
		$this->form_validation->set_rules('vision', 'Vision', 'trim|required|min_length[3]|max_length[500]|xss_clean');
		$this->form_validation->set_rules('quienesomos', 'Quiene Somos', 'trim|required|min_length[10]|max_length[500]|xss_clean');
		$this->form_validation->set_error_delimiters('</br></br><div style="width:225px; color:red;" class="alert alert-error">', '</div>');
		
		if ($this->form_validation->run() == False) {
			$this->load->view('editinfoempresa', $datos);			
		}
		else{
			$this->load->model('capaon_registro');
			$success = $this->capaon_registro->update_info_Empresa();

			if (!$success) {
				$datos['correcto'] = true;
				redirect('home');
				
			} else {
				$datos['incorrecto'] = true;
				$this->load->view('editinfoempresa', $datos);
			}
			
		}
	}

}
