|<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
        
        $_POST['permiso'] = 1;
        $login_db2 = array(
            'username' => $this ->input->post('correo'),
            'password' => $this ->input->post('password'),
            'permiso'  => $this ->input->post('permiso'),
        );
        $success1 = $this->db->insert('users',$login_db2);
    	return $success;
	}

	function registro_Natural(){
        $_POST['tipo'] = 'natural';
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
            'tipo' => $this->input->post('tipo'),
        );
        $success = $this->db->insert('natural',$login_db3);        
        
        $_POST['permiso'] = 2;
        $login_db4 = array(
            'username' => $this ->input->post('correo'),
            'password' => $this ->input->post('password'),
            'permiso'  => $this ->input->post('permiso'),
        );
        $success1 = $this->db->insert('users',$login_db4);
        return $success1;
	}
    function registro_Curso(){
        $login_db5 = array(
            'nombre' => $this->input->post('nombre'),
            'estado' => $this->input->post('estado'),
            'fechaIniInfo' => $this->input->post('fechaIniInfo'),
            'fechaFinInfo' => $this->input->post('fechaFinInfo'),
            'fechaIniInscripcion' => $this->input->post('fechaIniInscripcion'),
            'fechaFinInscripcion' => $this->input->post('fechaFinInscripcion'),
            'fechaIniCurso' => $this->input->post('fechaIniCurso'),
            'fechaFinCurso' => $this->input->post('fechaFinCurso'),
            'descBasica' => $this->input->post('descBasica'),
            'objetivo' => $this->input->post('objetivo'),
            'justificacion' => $this->input->post('justificacion'),
            'facilitadores' => $this->input->post('facilitadores'),
        );
        $success1 = $this->db->insert('curso',$login_db5);
        return $success1;
    }

    function update_curso(){
        $login_db5 = array(            
            'estado' => $this->input->post('Estado'),            
            'descBasica' => $this->input->post('descBasica'),
            'objetivo' => $this->input->post('objetivo'),
            'justificacion' => $this->input->post('justificacion'),
            'facilitadores' => $this->input->post('facilitadores'),
        );
        $this->db->where('id', $_POST['id']);
        $success1 = $this->db->update('curso',$login_db5);
        return $success1;
    }

    function registro_info_Empresa(){
        $login_db6 = array(
            'mision' => $this->input->post('mision'),
            'vision' => $this->input->post('vision'),
            'quieneSomos' => $this->input->post('quienesomos'),
        );
        
        $success = $this->db->insert('capaon', $login_db6);
        return $success;
    }

    function update_info_Empresa(){
        $data = array(
            'mision' => $this->input->post('mision'),
            'vision' => $this->input->post('vision'),
            'quieneSomos' => $this->input->post('quienesomos')
        );
        $this->db->update('capaon', $data);
    }

}


 
/* End of file capaon_registro.php */
/* Location: ./application/models/capaon_registro.php */
