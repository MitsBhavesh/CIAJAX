<?php
class users_model extends CI_Model {
	// function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->database('php_ajax', TRUE);
	// }
	// function __construct() 
	// {
 //    	parent::__construct();
 //    }
	public function show()
	{
		$this->load->database('php_ajax', TRUE);
		$query = $this->db->get('users');
		return $query->result(); 
		// alert (query); return false;
	}
 
	public function insert($user)
	{

		$query =$this->db->insert('users', $user);
		return $query;
	}
 
	public function getuser($id)
	{
		$this->load->database('php_ajax', TRUE);
		$query = $this->db->get_where('users', array('id' => $id));
	    $data = $query->row();
	    return json_encode($data);
	// return $query->row_array();
	}
 
	// public function updateuser($user, $id){
	// 	$this->db->where('users.id', $id);
	// 	return $this->db->update('users', $user);
	// }
 
	// public function delete($id){
	// 	$this->db->where('users.id', $id);
	// 	return $this->db->delete('users');
	// }
 
}
?>