<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReporteDetallado extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('index_m', 'modelo');
    }

	public function index(){
		$this->load->view('reporteDetallado', $_POST);
	}

	public function generar_pdf() {
        
        // enviamos el cabezal de la tabla
        $arrHeading = array('id curso','nombre', 'estado', 'cantMatriculados', 'descBasica', 'objetivo', 'justificacion', 'facilitadores');

        // obtenemos los datos resultantes de la consulta
        $arrData = $this->modelo->get_data_pdf_detalles($_POST['id']);

        // enviaremos el titulo
        $sTitulo = 'Reporte de cursos';

        // generamos el pdf
        generar_pdf($arrHeading, $arrData, $sTitulo);
    }




}

/* End of file reporteDetallado.php */
/* Location: ./application/controllers/reporteDetallado.php */
