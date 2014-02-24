<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Db_updater');
	}

  public function index() {
    /* verify if unique account */
    
    /* insert into db */
    $this->createAccount($_POST);
    
    
  }
  
  function verifyUniqueness() {
    /* check if username already exists */
    
    /* check if email already exists */
    
  }
  
  function createAccount($data) {
  	$data['password'] = md5($data['password']);
  
  	$this->Db_updater->newUser($data);
  }

}
