<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $data['permiso'] = $session_data['permiso'];
      //permisos de navegacion
      if ($data['permiso'] == 0){
        $this->load->view('admin', $data);
      }
      if ($data['permiso'] == 1){
        $this->load->view('empresa', $data);
      }
      if ($data['permiso'] == 2){
        $this->load->view('individual', $data);
      }
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }


}

?>