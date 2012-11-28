<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrearCurso extends CI_Controller {

	public function index(){
		$this->load->view('CrearCurso');
	}

	function curso(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'nombre del curso', 'trim|alpha|required|min_length[3]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('fechaIniInfo', 'fecha de Inicio informativa', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fechaFinInfo', 'fecha de cierrre informativa', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fechaIniInscripcion', 'fecha de inscripcion', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fechaFinInscripcion', 'fecha fin de inscripcion', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fechaIniCurso', 'fecha inicial del curso', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fechaFinCurso', 'fecha fin del curso', 'trim|required|xss_clean');
		$this->form_validation->set_rules('descBasica', 'descripcion basica', 'trim|alpha|required|min_length[30]|max_length[500]|xss_clean');
		$this->form_validation->set_rules('objetivo', 'objetivo', 'trim|required|alpha_numeric|min_length[30]|max_length[500]|xss_clean');
		$this->form_validation->set_rules('justificacion', 'justificacion', 'trim|alpha|required|alpha|min_length[30]|max_length[500]|xss_clean');
		$this->form_validation->set_rules('facilitadores', 'facilitadores', 'trim|alpha|alpha|required|min_length[10]|max_length[500]|xss_clean');


		$this->form_validation->set_error_delimiters('</br><div style="width:225px; color:red;" class="alert alert-error">', '</div><br />');

		if ($this->form_validation->run() == false) {
			$this->load->view('CrearCurso');
		} else {
			$_POST['ifechaIniInfo'] = $this->invertirFecha($_POST['fechaIniInfo']);
			$_POST['ifechaFinInfo'] = $this->invertirFecha($_POST['fechaFinInfo']);
			//$_POST['']

			$this->load->model('capaon_registro');
			$sucess = $this->capaon_registro->registro_Curso();

			if($sucess){
				$datos['correcto'] = TRUE;
				$this->load->view('CrearCurso', $datos);
			}else{
				$datos['incorrecto'] = TRUE;
				$this->load->view('CrearCurso', $datos);
			}

			/*
			echo "fecha normal "."<br>";
			print_r($_POST['fechaFinInfo']);
			echo "fecha invertida ";
			print_r($_POST['ifechaFinInfo']);
			*/
		}		
	}	
	function invertirFecha( $fecha ){
  		return implode( "-", array_reverse( preg_split( "/\D/", $fecha ) ) );
	}

}

/* End of file CrearCurso.php */
/* Location: ./application/controllers/CrearCurso.php */
