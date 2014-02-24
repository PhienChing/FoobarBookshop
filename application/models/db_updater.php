<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This class is only for updating the database.
 * Select statements must be made using the Db_viewer class
 */

class Db_updater extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->model('Db_viewer');
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
	
	//data passed contains title, type, synopsis, price, and quantity	
	function addProduct($data) {
		//insert to product table
		$product = array('title' => $data['title'], 'productType' => $data['productType'],
						 'synopsis' => $data['synopsis'], 'price' => $data['price']);
	
		$this->db->insert('product', $product);
		
		//get product id of newly inserted data
		$temp = $this->Db_viewer->getProductID($product);
		//echo $temp;
		//$inventory['productID'] = array_values($temp)[0];
		//$inventory['quantity'] = $data['Quantity'];
		
		//$this->db->insert('inventory', $inventory);
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
