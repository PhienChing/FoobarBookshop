<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This class is only for updating the database.
 * Select statements must be made using the Db_viewer class
 */

class Db_updater extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	
//////////////////////////////////////   PERSON   //////////////////////////////////////

	/* Inserts a new row in the Person table
	 * Assumption: data for insertion has already been screened */
	function newUser($data) {
		//$data should contain all values for insertion
		$this->db->insert('person', $data);
	}

	/**/
	function editUser($userID, $data) {
		$this->db->where('userID', $userID);
		$this->db->update('person', $data);
	}
	
	/**/
	function deleteUser($userID) {
		$this->db->where('userID', $userID);
		$this->db->delete('person');
	}
	
//////////////////////////////////////   PRODUCT   //////////////////////////////////////
		
	function addProduct($data) {
	
		$this->db->insert('product', $data);
		
	}
	
	/**/
	function editProduct($productID, $data) {
		$this->db->where('productID', $productID);
		$this->db->update('product', $data);
	}
	
	/**/
	function deleteProduct($productID) {
		$this->db->where('productID', $productID);
		$this->db->delete('product');
	}
	
/////////////////////////////////////   INVENTORY   /////////////////////////////////////

	function updateInventory($inventory) {
	
	}	
}
