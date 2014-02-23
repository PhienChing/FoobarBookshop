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
	
	/* returns all products in database */
	function getProducts() {
		$query = $this->db->get('product');
		
		return $query->result_array();
	}
	
	/* returns all products and their corresponding quantity */
	function getInventory() {
		$query = $this->db->query(
							'SELECT p.productID AS productID, p.title AS title, 
									p.productType AS productType, p.synopsis AS synopsis, 
									p.price AS price, i.quantity AS quantity
							FROM product p
							INNER JOIN inventory i
							ON p.productID=i.productID');
							
		return $query->result_array();
	}
	
	/* returns all transactions in database */
	function getTransactions() {
		$query = $this->db->query(
							'SELECT t.customerID, p.title AS title, p.productType AS type, t.dateTime
							FROM transaction t
							INNER JOIN product p
							ON t.productID=p.productID');
		
		return $query->result_array();
	}
	
	/* returns less sensitive data of all users in the database */
	function getUsers() {
		$this->db->select('firstName, middleInitial, lastName, userID, username, position, status');
		$query = $this->db->get('person');
							
		return $query->result_array();
	}
}
