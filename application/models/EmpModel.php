<?php
class EmpModel extends CI_Model{
	function employeeList(){
		$hasil=$this->db->get('employee');
		return $hasil->result();
	}
	function saveEmp(){
		$data = array(				
				'name' 			=> $this->input->post('name'), 
				'email' 			=> $this->input->post('email'), 
				'address' 	=> $this->input->post('address'), 
				'phone' 		=> $this->input->post('phone'), 
					);
		$result=$this->db->insert('employee',$data);
		return $result;
	}
	// function updateEmp(){
	// 	$id=$this->input->post('id');
	// 	$name=$this->input->post('name');
	// 	$email=$this->input->post('email');
	// 	$address=$this->input->post('address');
	// 	$phone=$this->input->post('phone');
		
	// 	$this->db->set('name', $name);
	// 	$this->db->set('email', $email);
	// 	$this->db->set('address', $address);
	// 	$this->db->set('phone', $phone);
		
	// 	$this->db->where('id', $id);
	// 	$result=$this->db->update('employee');
	// 	return $result;	
	// }
	// function deleteEmp(){
	// 	$id=$this->input->post('id');
	// 	$this->db->where('id', $id);
	// 	$result=$this->db->delete('employee');
	// 	return $result;
	// }	
}