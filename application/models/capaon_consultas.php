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
		$this->db-> from('curso');
		$this->db->where('id', $value);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file capaon_consultas.php */
/* Location: ./application/models/capaon_consultas.php */
