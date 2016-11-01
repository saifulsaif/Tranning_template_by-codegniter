<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Admin_Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id != NULL) {
            redirect('super_admin', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['title'] = 'Log In Form';
        $this->load->view('admin/login');
    }

    public function check_login() {
       
            redirect("super_admin");
      
         
    }

}

?>