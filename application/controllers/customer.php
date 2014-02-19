<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Db_viewer');
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['products'] = $this->getProducts();
	
		$this->load->view('shared/header');
		$this->load->view('customer/customer_nav');
		$this->load->view('customer/customer_view', $data);
		$this->load->view('shared/footer');
	}
	
	function getProducts()
	{
		//get query from database
		$data = $this->Db_viewer->getProducts();
		
		return $data;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
