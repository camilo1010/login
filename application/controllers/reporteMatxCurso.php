<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class reporteMatxCurso extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('index_m', 'modelo');
    }

    function index() {
        
        $this->load->view('reporteMatxCurso', $_POST);
    }

    public function generar_pdf() {
        
        // enviamos el cabezal de la tabla
        $arrHeading = array('cedula', 'nombre', 'correo', 'telefono', 'tipo');

        // obtenemos los datos resultantes de la consulta
        $arrData = $this->modelo->get_data_pdf($_POST['id']);

        // enviaremos el titulo
        $sTitulo = 'Personas matriculadas';

        // generamos el pdf
        generar_pdf($arrHeading, $arrData, $sTitulo);
    }
}