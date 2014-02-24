<?php  //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

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
			redirect('index.php/administrator');
		}
		elseif (strcasecmp($position, "accountingManager") == 0) {
			redirect('index.php/accountingManager');
		}
		elseif (strcasecmp($position, "productManager") == 0) {
			redirect('index.php/productManager');
		}
		elseif (strcasecmp($position, "customer") == 0) {
			redirect('index.php/customer');
		}
		else {
			echo "no";
		}
	}

}
