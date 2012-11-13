<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signinNatural extends CI_Controller {

	public function index(){
		$this->load->view('signinNatural');		
	}
	function sign(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'nombre', 'trim|alpha|required|min_length[3]|max_length[70]|xss_clean');		
		$this->form_validation->set_rules('apellido', 'apellido', 'trim|required|alpha|min_length[5]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('cedula', 'cedula', 'trim|numeric|required|is_unique[natural.cedula]|min_length[5]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('fechaNac', 'fecha nacimiento', 'trim|required|min_length[5]|max_length[100]|xss_clean');
		$this->form_validation->set_rules('sexo', 'sexo', 'trim|required|alpha|min_length[1]|max_length[1]|xss_clean');
		$this->form_validation->set_rules('direccion', 'direccion', 'trim|required|alpha_numeric|min_length[6]|max_length[80]|xss_clean');
		$this->form_validation->set_rules('pais', 'pais', 'trim|alpha|required|min_length[4]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('telefono', 'telefono', 'trim|numeric|required|min_length[4]|max_length[80]|xss_clean');
		$this->form_validation->set_rules('celular', 'celular', 'trim|numeric|required|min_length[4]|max_length[60]|xss_clean');
		$this->form_validation->set_rules('correo', 'correo', 'trim|required|valid_email|min_length[6]|max_length[60]|xss_clean|');
		$this->form_validation->set_rules('password', 'contrase&ntildea', 'trim|required|min_length[5]|matches[passwordC]|max_length[12]|md5|xss_clean');

		$this->form_validation->set_error_delimiters('</br></br><div style="width:225px; color:red;" class="alert alert-error">', '</div>');
		if ($this->form_validation->run() == False) {
			$this->load->view('signinNatural');
		}
		else{
			$this->load->model('capaon_registro');
			$success = $this->capaon_registro->registro_Natural();
			print_r($success);
			if ($success) {
				$datos['correcto'] = true;
				$this->load->view('signinNatural', $datos);
			} else {
				$datos['incorrecto'] = true;
				$this->load->view('signinNatural', $datos);
			}
			
		}
	}

}



/* End of file signinNatural.php */
/* Location: ./application/controllers/signinNatural.php */
