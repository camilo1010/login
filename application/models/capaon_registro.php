<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Capaon_registro extends CI_Model {

	function registro_Empresa(){
        $login_db  = array(
    		'RazonSocial' => $this->input->post('razonSocial'),
			'nit' => $this->input->post('nit'),
			'RepLegal' => $this->input->post('repLegal'),
			'Actividad' => $this->input->post('actividad'),
			'pais' => $this->input->post('pais'),
			'telefono' => $this->input->post('telefono'),
            'telefonoFax' => $this->input->post('telefonoFax'),
            'direccion' => $this->input->post('direccion'),
            'correo' => $this->input->post('correo'),
		);
        $success = $this->db->insert('empresa',$login_db);    	
        
        $login_db2 = array(
            'username' => $this ->input->post('correo'),
            'password' => $this ->input->post('password'),
            'permiso'  => $this ->input->post('1'),
        );
        $success1 = $this->db->insert('users',$login_db2);
    	return $success;
	}

	function registro_Natural(){
        $login_db3 = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'cedula' => $this->input->post('cedula'),
            'fechaNac' => $this->input->post('fechaNac'),
            'sexo' => $this->input->post('sexo'),
            'direccion' => $this->input->post('direccion'),
            'pais' => $this->input->post('pais'),
            'telefono' => $this->input->post('telefono'),
            'celular' => $this->input->post('celular'),
            'correo' => $this->input->post('correo'),  
        );
        $success = $this->db->insert('natural',$login_db3);
        return $success;
        
        $login_db4 = array(
            'username' => $this ->input->post('correo'),
            'password' => $this ->input->post('password'),
            'permiso'  => $this ->input->post('2'),
        );
        $success1 = $this->db->insert('users',$login_db4);
        return $success1;
        
		
	}

}

 
/* End of file capaon_registro.php */
/* Location: ./application/models/capaon_registro.php */
