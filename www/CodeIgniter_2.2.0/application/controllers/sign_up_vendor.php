<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sign_Up_Vendor extends CI_Controller {
 
    public function index()
    {
        echo "Hello World";
    }

    public function take_vendor_entries()
    {
       $this->load->database();
       $this->load->view('take_vendor_entries');
    }

    public function insert_vendor_data()
    {
       // $this->load->model('Sign_Upmodel');
        $this->load->database();
        $data = array( 
        'Name' => $this->input->post('name'),
        'Username' => $this->input->post('username'),
        'Password' => $this->input->post('pswd'),
        'E-mail' => $this->input->post('email'),
        'Contact' => intval($this->input->post('Contact number'))
        );

        $data1 = array(
        'Email' => $this->input->post('email'),
        'Stream' => $this->input->post('stream'),
        'AccountNumber'=> intval($this->input->post('accnum')),
        'BusinessName' => $this->input->post('bname'),
        'Address' => $this->input->post('address'),
        'City' => $this->input->post('city'),
        'State' => $this->input->post('state'),
        'Pincode' => intval($this->input->post('pincode')),
        );

        $this->db->insert('users', $data); 
        $this->db->insert('vendor', $data1); 

        print_r("hello"); 
    }
}