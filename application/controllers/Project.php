<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller
 {
 
   public function __construct()
   {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Project_model');
 
   }
 
   
 
  public function index()
  {
    // $data['title'] = "CRUD Oeration Using AJAX";
    
    $this->load->view('emp');
 
  }

  public function insert_data()
   {
    // print_r($_POST); exit;
    // Retrieve data from the POST request
    $db=$this->load->database('php_ajax', TRUE);

    $name = $_POST['name'];
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $address = $this->input->post('address');
    $phone = $this->input->post('phone');
    // Insert data into the database
    $db->insert('employee', array('name' => $name, 'email' => $email, 'address' => $address,'phone' => $phone));
    // Send a response back to the JavaScript file
    if ($db->affectedRows() > 0)
     {
      // alert('data inserted');return false;
        echo 'Data inserted successfully';
    } else {
        echo 'Data Insert failed';
    }
}
 
  // public function show_all()
  // {
  //   $employee = $this->project->get_all();
  //   header('Content-Type: application/json');
  //   echo json_encode($employee);
  // }

  // public function show($id)
  // {
  //   $project = $this->project->get($id);
  //   header('Content-Type: application/json');
  //   echo json_encode($project);
  // }
 
 
 
  // public function store()
  // {
  //   $this->form_validation->set_rules('name', 'Name', 'required');
  //   $this->form_validation->set_rules('email', 'Email', 'required');
  //   $this->form_validation->set_rules('address', 'Address', 'required');
  //   $this->form_validation->set_rules('phone', 'Phone', 'required');
     
  //   if (!$this->form_validation->run())
  //   {
  //     http_response_code(412);
  //     header('Content-Type: application/json');
  //     echo json_encode([
  //       'status' => 'error',
  //       'errors' => validation_errors()
  //     ]);
  //   } else {
  //      $this->Project->store();
  //      header('Content-Type: application/json');
  //      echo json_encode(['status' => "success"]);
  //   }
 
  }
 

  // public function edit($id)
  // {
  //   $project = $this->project->get($id);
  //   header('Content-Type: application/json');
  //   echo json_encode($project);   
  // }

  // public function update($id)
  // {
  //  $this->form_validation->set_rules('name', 'Name', 'required');
  //   $this->form_validation->set_rules('email', 'Email', 'required');
  //   $this->form_validation->set_rules('address', 'Address', 'required');
  //   $this->form_validation->set_rules('phone', 'Phone', 'required');

  //   if (!$this->form_validation->run())
  //   {
  //     http_response_code(412);
  //     header('Content-Type: application/json');
  //     echo json_encode([
  //       'status' => 'error',
  //       'errors' => validation_errors()
  //     ]);
  //   } else {
  //      $this->project->update($id);
  //      header('Content-Type: application/json');
  //      echo json_encode(['status' => "success"]);
  //   }
 
 
  // }
 

  // public function delete($id)
  // {
  //   $item = $this->project->delete($id);
  //   header('Content-Type: application/json');
  //   echo json_encode(['status' => "success"]);
  // }
 
 
