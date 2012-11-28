<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_data_pdf($value) {

        //$result = $this->db->query('SELECT idtabla1, campo1 FROM tabla1');

    	$estado = 'matriculado';
		$this->db->select('cedula, tipo, nombre, correo, telefono');
		$this->db->from('inscrito');
		$info = array(
			'estado' => $estado, 
			'id_curso' => $value,
		);
		$this->db->where($info);

		$result = $this->db->get();		

        // recuerda que puiedes hacer cualquier filtro usando SQL
        // como limitar el numero de registros, mostrar todo en mayúscula, etc..

        $arrDatos = array();
        foreach ($result->result_array() as $row) {
            $arrDatos[] = array(
                htmlspecialchars($row['cedula'], ENT_QUOTES),
                htmlspecialchars($row['nombre'], ENT_QUOTES),
                htmlspecialchars($row['correo'], ENT_QUOTES),
                htmlspecialchars($row['telefono'], ENT_QUOTES),
                htmlspecialchars($row['tipo'], ENT_QUOTES),
            );
        }
        $result->free_result();
        $this->db->close();

        return($arrDatos);
        
    }

    function get_data_pdf_cursos(){
    	$result = $this->db->query('SELECT id, nombre, estado FROM curso');

    	$arrDatos = array();
        foreach ($result->result_array() as $row) {
            $arrDatos[] = array(
                htmlspecialchars($row['id'], ENT_QUOTES),
                htmlspecialchars($row['nombre'], ENT_QUOTES),
                htmlspecialchars($row['estado'], ENT_QUOTES),
            );
        }
        $result->free_result();
        $this->db->close();

        return($arrDatos);
    }

    function get_data_pdf_detalles($value){
		$this->db->select();
		$this->db->from('curso');
		$info = array(
			'id' => $value,
		);
		$this->db->where($info);

		$result = $this->db->get();


    	$arrDatos = array();
        foreach ($result->result_array() as $row) {
            $arrDatos[] = array(
                htmlspecialchars($row['id'], ENT_QUOTES),
                htmlspecialchars($row['nombre'], ENT_QUOTES),
                htmlspecialchars($row['estado'], ENT_QUOTES),
                htmlspecialchars($row['cantMatriculados'], ENT_QUOTES),
                htmlspecialchars($row['descBasica'], ENT_QUOTES),
                htmlspecialchars($row['objetivo'], ENT_QUOTES),
                htmlspecialchars($row['justificacion'], ENT_QUOTES),
                htmlspecialchars($row['facilitadores'], ENT_QUOTES),
            );
        }
        $result->free_result();
        $this->db->close();

        return($arrDatos);
    }
}