<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This class is only for updating the database.
 * Select statements must be made using the Db_viewer class
 */

class Db_updater extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	
	/* Inserts a new row in the Person table
	 * Assumption: data for insertion has already been screened */
	function newUser($data) {
		//$data should contain all values for insertion
		$this->db->insert('person', $data);
	}

	/**/
	function editUser($id, $data) {
		$this->db->where('userID', $id);
		$this->db->update('person', $data);
	}
}
