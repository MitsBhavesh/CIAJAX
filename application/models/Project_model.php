<?php
 
 
class Project_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database('php_ajax', TRUE);
        // $this->load->helper('url');
    }
 
    public function get_all()
    {
        $employee = $this->db->get("employee")->result();
        return $employee;
    }

    public function store()
    {    
        $data = [
            'name'  => $this->input->post('name'),
            'email'  => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        ];
 
        $result = $this->db->insert('employee', $data);
        return $result;
    }

    public function get($id)
    {
        $project = $this->db->get_where('employee', ['id' => $id ])->row();
        return $project;
    }
 
 
    // public function update($id) 
    // {
    //     $data = [
    //         'name'        => $this->input->post('name'),
    //         'email'        => $this->input->post('email'),
    //         'address'        => $this->input->post('address'),
    //         'phone' => $this->input->post('phone')
    //     ];
 
    //     $result = $this->db->where('id',$id)->update('employee',$data);
    //     return $result;
                 
    // }
 
    
    // public function delete($id)
    // {
    //     $result = $this->db->delete('employee', array('id' => $id));
    //     return $result;
    // }
     
}
?>