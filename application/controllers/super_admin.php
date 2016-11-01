<?php

class Super_admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        static $data;
         $this->load->model('super_admin_model', 'sa_model', TRUE);
        $this->load->model('welcome_model', 'w_model', true);
      

        
    }

    private static $maincontent = null;

    public function index() {
        $data = array();
        $data['maincontent'] = $this->load->view('admin/admin_home_content', '', true);
        $data['test'] = "test text";
        $this->load->view('admin/admin_master',$data);
        
    }
    public function header() {
        $data = array();
        $data['title'] = 'Header Details';
        $data['all_header'] = $this->sa_model->select_all_header();
        $data['all_header'] = $this->w_model->select_all_header();
        $data['maincontent'] = $this->load->view('admin/header', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_header() {
        $data = array();
        $data['header_id'] = $this->input->post('header_id', true);
        $data['number'] = $this->input->post('number', true);
        $data['address'] = $this->input->post('address', true);
        $this->sa_model->save_header_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/header');
    }

    public function delete_header($header_id) {
        $this->sa_model->delete_header_info_by_header_id($header_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/header');
    }

    public function edit_header($header_id) {
        $data = array();
        $data['title'] = 'Edit Welcome Message Dtails';
       $data['header_info'] = $this->sa_model->select_header_info_by_header_id($header_id);
        $data['maincontent'] = $this->load->view('admin/edit_header', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_header() {
        $data = array();
        
        
        //this was an error
        //$data['header_id'] = $this->input->post('header_id', true);
        
        
         $header_id = $this->input->post('header_id', true);
        $data['number'] = $this->input->post('number', true);
        $data['address'] = $this->input->post('address', true);

        $this->sa_model->update_header_info($data, $header_id);
        $sdata = array();
        $sdata['message'] = "Updated Data Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_header/' . $header_id);
    }
    
    
      public function main_portfolio() {
        $data = array();
        $data['title'] = 'portfolio';
        $data['all_main_portfolio'] = $this->sa_model->select_all_main_portfolio();
        $data['all_main_portfolio'] = $this->w_model->select_all_main_portfolio();
        $data['maincontent'] = $this->load->view('admin/main_portfolio', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

   public function save_main_portfolio() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'images/work/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('main_portfolio_photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/main_portfolio');
        } else {
            $fdata = $this->upload->data();
            $data['main_portfolio_photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['main_portfolio_title'] = $this->input->post('main_portfolio_title', true);
            $this->sa_model->save_main_portfolio_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/main_portfolio');
        }
    }
    public function delete_main_portfolio($id) {
        $this->sa_model->delete_main_portfolio_info_by_id($id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
       redirect('super_admin/main_portfolio');
    
    }

    public function edit_main_portfolio($id) {
        $data = array();
        $data['title'] = 'Edit Slide';
        $data['main_portfolio_info'] = $this->sa_model->select_main_portfolio_info_by_id($id);
        $data['maincontent'] = $this->load->view('admin/edit_main_protfolio', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_main_portfolio() {
        $data = array();
        $config['upload_path'] = 'images/slide_images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '';
        $config['max_height'] = '';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('main_portfolio_photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['main_portfolio_photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $id = $this->input->post('id', true);
        $data['main_portfolio_title'] = $this->input->post('main_portfolio_title', true);
         $data['main_portfolio_photo'] = $this->input->post('main_portfolio_photo', true);
        $this->sa_model->update_main_portfolio_info($data, $id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_main_portfolio/' . $id);
    }
    
    
    
      public function trainings() {
        $data = array();
        $data['title'] = 'trainings';
        $data['all_trainings'] = $this->sa_model->select_all_trainings();
        $data['all_trainings'] = $this->w_model->select_all_trainings();
        $data['maincontent'] = $this->load->view('admin/trainings', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

   public function save_trainings() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'images/work/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('trainings_photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/trainings');
        } else {
            $fdata = $this->upload->data();
            $data['trainings_photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['trainings_title'] = $this->input->post('trainings_title', true);
            $data['trainings_speaker'] = $this->input->post('trainings_speaker', true);
            $data['trainings_date'] = $this->input->post('trainings_date', true);
            $data['trainings_time'] = $this->input->post('trainings_time', true);
            $data['trainings_price'] = $this->input->post('trainings_price', true);
            $this->sa_model->save_trainings_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/trainings');
        }
    }
    public function delete_trainings($id) {
        $this->sa_model->delete_trainings_info_by_id($id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
       redirect('super_admin/trainings');
    
    }

    public function edit_trainings($id) {
        $data = array();
        $data['title'] = 'Edit trainings';
        $data['trainings_info'] = $this->sa_model->select_trainings_info_by_id($id);
        $data['maincontent'] = $this->load->view('admin/edit_trainings', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_trainings() {
        $data = array();
        $config['upload_path'] = 'images/work/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '';
        $config['max_height'] = '';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('trainings_photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['trainings_photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $id = $this->input->post('id', true);
        $data['trainings_photo'] = $this->input->post('trainings_photo', true);
        $data['trainings_title'] = $this->input->post('trainings_title', true);
        $data['trainings_speaker'] = $this->input->post('trainings_speaker', true);
        $data['trainings_date'] = $this->input->post('trainings_date', true);
        $data['trainings_time'] = $this->input->post('trainings_time', true);
        $data['trainings_price'] = $this->input->post('trainings_price', true);
        $this->sa_model->update_trainings_info($data, $id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_trainings/' . $id);
    }
    
    
    
     public function coaches() {
        $data = array();
        $data['title'] = 'coaches';
        $data['all_coaches'] = $this->sa_model->select_all_coaches();
        $data['all_coaches'] = $this->w_model->select_all_coaches();
        $data['maincontent'] = $this->load->view('admin/coaches', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

   public function save_coaches() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'images/work/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/coaches');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['coaches_name'] = $this->input->post('coaches_name', true);
            $data['coaches_position'] = $this->input->post('coaches_position', true);
            $data['coaches_department'] = $this->input->post('coaches_department', true);
            $this->sa_model->save_coaches_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/coaches');
        }
    }
    public function delete_coaches($id) {
        $this->sa_model->delete_coaches_info_by_id($id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
       redirect('super_admin/coaches');
    
    }

    public function edit_coaches($id) {
        $data = array();
        $data['title'] = 'Edit coaches';
        $data['coaches_info'] = $this->sa_model->select_coaches_info_by_id($id);
        $data['maincontent'] = $this->load->view('admin/edit_coaches', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_coaches() {
        $data = array();
        $config['upload_path'] = 'images/coaches/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '';
        $config['max_height'] = '';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('coaches_photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['coaches_photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $id = $this->input->post('id', true);
       $data['coaches_name'] = $this->input->post('coaches_name', true);
       $data['coaches_position'] = $this->input->post('coaches_position', true);
       $data['coaches_department'] = $this->input->post('coaches_department', true);
       $this->sa_model->update_coaches_info($data, $id);
       $sdata = array();
       $sdata['message'] = 'Update Data Successfully !';
       $this->session->set_userdata($sdata);
       redirect('super_admin/edit_coaches/' . $id);
    }
    
    
      public function about() {
        $data = array();
        $data['title'] = 'about';
        $data['all_about'] = $this->sa_model->select_all_about();
        $data['all_about'] = $this->w_model->select_all_about();
        $data['maincontent'] = $this->load->view('admin/about', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

   public function save_about() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'images/work/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('super_admin/about');
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['feature1'] = $this->input->post('feature1', true);
            $data['feature2'] = $this->input->post('feature2', true);
            $data['feature3'] = $this->input->post('feature3', true);
            $data['feature4'] = $this->input->post('feature4', true);
            $data['feature5'] = $this->input->post('feature5', true);
            $data['feature6'] = $this->input->post('feature6', true);
            $data['feature7'] = $this->input->post('feature7', true);
            $data['about_details'] = $this->input->post('about_details', true);
            $this->sa_model->save_about_info($data);
            $sdata = array();
            $sdata['message'] = "Saved Image Successfully";
            $this->session->set_userdata($sdata);
            redirect('super_admin/about');
        }
    }
    public function delete_about($id) {
        $this->sa_model->delete_about_info_by_id($id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
       redirect('super_admin/about');
    
    }

    public function edit_about($id) {
        $data = array();
        $data['title'] = 'Edit about';
        $data['trainings_info'] = $this->sa_model->select_about_info_by_id($id);
        $data['maincontent'] = $this->load->view('admin/edit_about', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_about() {
        $data = array();
        $config['upload_path'] = 'images/work/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '';
        $config['max_height'] = '';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();


            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $id = $this->input->post('id', true);
        $data['photo'] = $this->input->post('photo', true);
        $data['feature1'] = $this->input->post('feature1', true);
        $data['feature2'] = $this->input->post('feature2', true);
        $data['feature3'] = $this->input->post('feature3', true);
        $data['feature4'] = $this->input->post('feature4', true);
        $data['feature5'] = $this->input->post('feature5', true);
        $data['feature6'] = $this->input->post('feature6', true);
        $data['feature7'] = $this->input->post('feature7', true);
        $data['about_details'] = $this->input->post('about_details', true);
        $this->sa_model->update_about_info($data, $id);
        $sdata = array();
        $sdata['message'] = 'Update Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_about/' . $id);
    }
    
    
    
    
}
   ?>