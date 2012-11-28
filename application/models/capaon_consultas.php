<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Capaon_consultas extends CI_Model {

	function getCursos(){
		$this->db->select('id, nombre, estado, descBasica, objetivo, justificacion, facilitadores');
		$this -> db -> from('curso');		
		$query = $this->db->get();		
		return $query->result();
	}

	function getInfoEmpresa()
	{
		$this->db->select('id, mision, vision, quieneSomos');
		$this->db-> from('capaon');
		$query = $this->db->get();
		return $query->result();
	}
	function getCursos2($value){
		$this->db->select('nombre, estado, descBasica, objetivo, justificacion, facilitadores');
		$this->db->from('curso');
		$this->db->where('id', $value);
		$query = $this->db->get();
		return $query->result();
	}

	function getConsulta_Matriculado($value){
		$estado = 'matriculado';
		$this->db->select('cedula, tipo, nombre, correo, telefono');
		$this->db->from('inscrito');
		$info = array(
			'estado' => $estado, 
			'id_curso' => $value,
		);
		$this->db->where($info);

		$query = $this->db->get();
		//print_r($query->result());
		return $query->result();
	}

	function getConsulta_Potencial(){
		$estado = 'potencial';
		$this->db->select('cedula, tipo, nombre, correo, telefono, id_curso');
		$this->db->from('inscrito');
		$info = array(
			'estado' => $estado,
		);
		$this->db->where($info);
		$this->db->order_by('id_curso', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function eliminarCurso($value){
		$estado = 'cancelAdmin';
		$this->db->where('id', $value);
		$this->db->delete('curso');

		$datos = array('estado' => $estado);
		$this->db->where('id_curso', $value);
		$this->db->update('inscrito', $datos);
	}
}

/* End of file capaon_consultas.php */
/* Location: ./application/models/capaon_consultas.php */
