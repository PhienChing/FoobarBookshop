<?php  //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

  	public function index() {
    	//end session
    	redirect('index.php');
  	}
}