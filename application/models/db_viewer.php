<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This class is only for viewing the database.
 * Updates, inserts, deletes must be made using the Db_updater class
 */

class Db_viewer extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	function viewUser($username) {
		/* for testing */
		$this->db->where('username', $username);
		$query = $this->db->get('person');
		
		
		return $query->result();
	}
	/*
	function authenticate($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('person');
	
		//something
	}
	 */
	function getPosition($username) {
		$this->db->select('position');
		$this->db->where('username', $username);
		$query = $this->db->get('person');
		$row = $query->first_row();
		
		return $row->position;
	}
	
	function getProducts() {
		$query = $this->db->get('product');
		
		return $query->result_array();
	}
	
	function getTransactions() {
		$query = $this->db->query('SELECT t.customerID, p.title AS title, p.productType AS type, t.dateTime
							FROM transaction t
							INNER JOIN product p
							ON t.productID=p.productID');
		
		return $query->result_array();
	}
}
