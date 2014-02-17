<?php  //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index() {
    /* check login credentials against database */
	  $this->load->model('Db_viewer');
	  
	  $position = $this->Db_viewer->getPosition($_POST["username"]);
	  $this->loadAptPage($position);
	  //$this->load->view('admin_view');
    /* check position */
    
    /* load page for apt position */
  }
	
	function loadAptPage($position) {
		if (strcasecmp($position, "administrator") == 0) {
			$this->load->view('shared/header');
			//$this->load->view('admin_nav');
			//$this->load->view('admin_view');
			$this->load->view('shared/footer');
			//echo "helzz yeah";
		}
		else {
			echo "no";
		}
	}

}
