<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This class is only for viewing the database.
 * Updates, inserts, deletes must be made using the Db_updater class
 */

class Db_viewer extends CI_Model {

	function viewUser($username) {
		//$this->load->database('group_name');
		
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
}
