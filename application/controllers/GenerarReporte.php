<?php 

if ( ! defined('BASEPATH')) 
	exit('No direct script access allowed');

class GenerarReporte extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('index_m', 'modelo');
    }

	public function index(){
		$this->load->view('generarReporte');
	}

	public function generar_pdf() {
        
        // enviamos el cabezal de la tabla
        $arrHeading = array('id curso','nombre', 'estado');

        // obtenemos los datos resultantes de la consulta
        $arrData = $this->modelo->get_data_pdf_cursos();

        // enviaremos el titulo
        $sTitulo = 'Reporte de cursos';

        // generamos el pdf
        generar_pdf($arrHeading, $arrData, $sTitulo);
    }


}

/* End of file generarReporte.php */
/* Location: ./application/controllers/generarReporte.php */
