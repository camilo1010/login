<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SigninEmpresa extends CI_Controller {

	public function index(){
		$this->load->view('SigninEmpresa');
	}
	function sign(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('razonSocial', 'razon social','trim|alpha_numeric|required|min_length[3]|max_length[70]|xss_clean');
		$this->form_validation->set_rules('nit', 'nit', 'trim|required|numeric|min_length[5]|is_unique[empresa.nit]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('repLegal', 'representante legal', 'trim|alpha|required|min_length[5]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('actividad', 'actividad', 'trim|alpha|required|min_length[5]|max_length[100]|xss_clean');
		$this->form_validation->set_rules('pais', 'pais', 'trim|required|alpha|min_length[4]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('telefono', 'telefono', 'trim|required|numeric|min_length[6]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('telefonoFax', 'telefono fax', 'trim|numeric|required|min_length[4]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('direccion', 'direccion', 'trim|alpha_numeric|required|min_length[4]|max_length[80]|xss_clean');
		$this->form_validation->set_rules('correo', 'correo', 'trim|valid_email|required|min_length[4]|max_length[60]|xss_clean');
		$this->form_validation->set_rules('password', 'contraseña', 'trim|required|alpha_numeric|min_length[6]|max_length[12]|matches[passwordC]|xss_clean|md5');

		$this->form_validation->set_error_delimiters('</br></br><div style="width:225px; color:red;" class="alert alert-error">', '</div>');
		if ($this->form_validation->run() == False) {
			$this->load->view('SigninEmpresa');
		}
		else{
			$this->load->model('capaon_registro');
			$success = $this->capaon_registro->registro_Empresa();

			if ($success) {
				$datos['correcto'] = true;
				$this->load->view('SigninEmpresa', $datos);
			} else {
				$datos['incorrecto'] = true;
				$this->load->view('SigninEmpresa', $datos);
			}
			
		}
	}

}


/* End of file SigninEmpresa.php */
/* Location: ./application/controllers/SigninEmpresa.php */


/* End of file SigninEmpresa.php */
/* Location: ./application/controllers/SigninEmpresa.php */
