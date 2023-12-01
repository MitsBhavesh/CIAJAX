<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->database('php_ajax', TRUE);
	}
	public function index()
	{
		$this->load->database('php_ajax', TRUE);
		$query = "select * from users";
      $result=$this->db->query($query)->result_array();

		$this->load->view('show',['data'=>$result]);
	}
	public function GETID_Process()
	{	
		$id = $_POST['id'];
		$db = $this->load->database('php_ajax', TRUE);
  		$sql = "select * from users WHERE id='".$id."'";
 		$result=$this->db->query($sql)->result_array()[0];
 		print_r(json_encode($result));
	}
		//////update table////
	 public function UPDATE_Process()
   {
  		$db = $this->load->database('php_ajax', TRUE);
      $Uid = $_POST['id'];
 		$name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];

      $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`address`='$address',`phone`='$phone' WHERE id=$Uid";
      $result=$db->query($sql);
       
   }
	public function DELETE_Process()
	{
		if(isset($_POST['deleteid']))
		{
			$userid=$_POST['deleteid'];
			$sql="DELETE from users where id='$userid'";
			$result=$this->db->query($sql);
			redirect(base_url("User"));
		}
	}
	public function insert()
	{   
		 $db=$this->load->database('php_ajax', TRUE);
		 if(isset($_POST['checking_add']))
		{
			$name=$_POST['name'];
			$email= $_POST['email'];
			$address = $_POST['address'];
			$phone=$_POST['phone'];

			$db->insert('users', array('name' => $name, 'email' => $email, 'address' => $address,'phone' => $phone));
			if ($db->affectedRows() > 0)
     		{
            echo 'Data inserted successfully';
   		}
   		else
   		{
        		echo 'Data Insert failed';
    		}
		}
	}
}