<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Model {

	public function get_project($pid) {
		$this->load->database();
		$this->db->where('project_id', $pid);
		$dpid = $this->db->get('projects');
		$result = $dpid->result_array();

		return $result;
	}

	public function all_project() {
		$this->load->database();
		$dpid = $this->db->get('projects');
		$result = $dpid->result_array();

		return $result;
	}

}