<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editarcurso extends CI_Controller {

	public function index(){
		$curso = $this->getCurso();
		$curso['id'] = $_POST['id'];
		$this->load->view('editarcurso', $curso);
	}

	function getCurso(){
		$this->load->model('capaon_consultas');
		$result['curso'] = $this->capaon_consultas->getCursos2($_POST['id']);
		$dump = array();
		foreach ($result['curso'] as $key) {
			$dump['nombre'] = $key->nombre;
			$dump['Estado'] = $key->estado;
			$dump['descBasica'] = $key->descBasica;
			$dump['objetivo'] = $key->objetivo;
			$dump['justificacion'] = $key->justificacion;
			$dump['facilitadores'] = $key->facilitadores;
		}		
		return $dump;
	}

	function curso(){
		$datos['id'] = $_POST['id'];
		$Estado = $this->input->post('Estado');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('descBasica', 'descripcion basica ', 'required|min_length[30]|max_length[500]');
		$this->form_validation->set_rules('objetivo', 'objetivo ', 'required|min_length[30]|max_length[500]');
		$this->form_validation->set_rules('justificacion', 'justificacion ', 'required|min_length[30]|max_length[500]');
		$this->form_validation->set_rules('facilitadores', 'facilitadores ', 'required|min_length[10]|max_length[500]');
		$this->form_validation->set_error_delimiters('</br></br><div style="width:225px; color:red;" class="alert alert-error">', '</div>');
		$datos += $_POST;

		if ($this->form_validation->run() == false) {
			$this->load->view('editarcurso', $datos);
		}
		else{
			$this->load->model('capaon_registro');
			$success = $this->capaon_registro->update_curso();
			if ($success) {
				$datos['correcto'] = true;
				redirect('listCursos');
			} else {
				$datos['incorrecto'] = true;
				$this->load->view('editarcurso', $datos);
			}
			
		}
	}

}
