<?php

class super_admin_model extends CI_Model {

    //put your code herep



    public function save_header_info($data) {
        $this->db->insert('header', $data);
    }

    public function select_all_header() {
        $this->db->select('*');
        $this->db->from('header');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_header_info_by_header_id($header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->delete('header');
    }

    public function select_header_info_by_header_id($header_id) {
        $this->db->select('*');
        $this->db->from('header');
        $this->db->where('header_id', $header_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_header_info($data, $header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->update('header', $data);
    }  
    
    
       public function save_main_portfolio_info($data) {
        $this->db->insert('main_portfolio', $data);
    }

    public function display_main_portfolio_details_by_id($id) {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_main_portfolio_info_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('main_portfolio');
    }
    
   

    public function select_all_main_portfolio() {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_main_portfolio_info_by_id($id) {
        $this->db->select('*');
        $this->db->from('main_portfolio');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
        
    }
    
    public function update_main_portfolio_info($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('main_portfolio', $data);
    }
     
    
     public function save_trainings_info($data) {
        $this->db->insert('trainings', $data);
    }

    public function display_trainings_details_by_id($id) {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_trainings_info_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('trainings');
    }
    
   

    public function select_all_trainings() {
        $this->db->select('*');
        $this->db->from('trainings');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_trainings_info_by_id($id) {
        $this->db->select('*');
        $this->db->from('trainings');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
        
    }
    public function update_trainings_info($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('trainings', $data);
    }
    
     
     public function save_coaches_info($data) {
        $this->db->insert('coaches', $data);
    }

    public function display_coaches_details_by_id($id) {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_coaches_info_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('coaches');
    }
    
   

    public function select_all_coaches() {
        $this->db->select('*');
        $this->db->from('coaches');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_coaches_info_by_id($id) {
        $this->db->select('*');
        $this->db->from('coaches');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
        
    }
  public function update_coaches_info($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('coaches', $data);
    }
    
     
     public function save_about_info($data) {
        $this->db->insert('about', $data);
    }

    public function display_about_details_by_id($id) {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_about_info_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('about');
    }
    
   

    public function select_all_about() {
        $this->db->select('*');
        $this->db->from('about');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_about_info_by_id($id) {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
   
        
    }
    public function update_about_info($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('about', $data);
    }
    
     
}

?>
