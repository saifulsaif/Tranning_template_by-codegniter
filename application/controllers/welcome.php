<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
       public function __construct() {
        parent::__construct();
        static $data;
         $this->load->model('super_admin_model', 'sa_model', TRUE);
        $this->load->model('welcome_model', 'w_model', true);
      

        
    }
	public function index()
	{
                $data = array();
                $data['all_header'] = $this->w_model->select_all_header();
                $data['all_main_portfolio'] = $this->w_model->select_all_main_portfolio();
                $data['all_main_portfolio'] = $this->sa_model->select_all_main_portfolio();
                $data['first_trainings'] = $this->w_model->select_first_trainings();
                $data['second_trainings'] = $this->w_model->select_second_trainings();
                $data['third_trainings'] = $this->w_model->select_third_trainings();
                $data['first_coaches'] = $this->w_model->select_first_coaches();
                $data['second_coaches'] = $this->w_model->select_second_coaches();
                $data['third_coaches'] = $this->w_model->select_third_coaches();
                $data['fourth_coaches'] = $this->w_model->select_fourth_coaches();
                $data['frist_main_portfolio'] = $this->w_model->select_frist_main_portfolio();
                $data['second_main_portfolio'] = $this->w_model->select_second_main_portfolio();
                $data['third_main_portfolio'] = $this->w_model->select_third_main_portfolio();
                $data['fourth_main_portfolio'] = $this->w_model->select_fourth_main_portfolio();
                $data['fifth_main_portfolio'] = $this->w_model->select_fifth_main_portfolio();
                $data['sixth_main_portfolio'] = $this->w_model->select_sixth_main_portfolio();
                $data['seventh_main_portfolio'] = $this->w_model->select_seventh_main_portfolio();
                $data['eight_main_portfolio'] = $this->w_model->select_eight_main_portfolio();
                $data['nine_main_portfolio'] = $this->w_model->select_nine_main_portfolio();
		$this->load->view('index',$data);
	}
        public function coaches()
	{
                $data = array();
                $data['all_header'] = $this->w_model->select_all_header();
                $data['all_coaches'] = $this->w_model->select_all_coaches();
                $data['first_coaches'] = $this->w_model->select_first_coaches();
                $data['second_coaches'] = $this->w_model->select_second_coaches();
                $data['third_coaches'] = $this->w_model->select_third_coaches();
                $data['fourth_coaches'] = $this->w_model->select_fourth_coaches();
                $data['fifth_coaches'] = $this->w_model->select_fifth_coaches();
                $data['sixth_coaches'] = $this->w_model->select_sixth_coaches();     
                $data['seventh_coaches'] = $this->w_model->select_seventh_coaches();  
                $data['eight_coaches'] = $this->w_model->select_eight_coaches();  
                $data['nine_coaches'] = $this->w_model->select_nine_coaches();  
                $data['ten_coaches'] = $this->w_model->select_ten_coaches();
                $data['eleven_coaches'] = $this->w_model->select_eleven_coaches();   
                $data['twelve_coaches'] = $this->w_model->select_twelve_coaches();  
		$this->load->view('coaches', $data);
	}
         public function gallery()
	{
                $data = array();
                $data['all_header'] = $this->w_model->select_all_header();
                $data['all_main_portfolio'] = $this->w_model->select_all_main_portfolio();
                $data['frist_main_portfolio'] = $this->w_model->select_frist_main_portfolio();
                $data['second_main_portfolio'] = $this->w_model->select_second_main_portfolio();
                $data['third_main_portfolio'] = $this->w_model->select_third_main_portfolio();
                $data['fourth_main_portfolio'] = $this->w_model->select_fourth_main_portfolio();
                $data['fifth_main_portfolio'] = $this->w_model->select_fifth_main_portfolio();
                $data['sixth_main_portfolio'] = $this->w_model->select_sixth_main_portfolio();
                $data['seventh_main_portfolio'] = $this->w_model->select_seventh_main_portfolio();
                $data['eight_main_portfolio'] = $this->w_model->select_eight_main_portfolio();
                $data['nine_main_portfolio'] = $this->w_model->select_nine_main_portfolio();
                $data['ten_main_portfolio'] = $this->w_model->select_ten_main_portfolio();
                $data['eleven_main_portfolio'] = $this->w_model->select_eleven_main_portfolio();
                $data['twelve_main_portfolio'] = $this->w_model->select_twelve_main_portfolio();
                $data['thirteen_main_portfolio'] = $this->w_model->select_thirteen_main_portfolio();
                $data['fourteen_main_portfolio'] = $this->w_model->select_fourteen_main_portfolio();
                $data['fifteen_main_portfolio'] = $this->w_model->select_fifteen_main_portfolio();
                $data['sixteen_main_portfolio'] = $this->w_model->select_sixteen_main_portfolio();
                $data['seventeen_main_portfolio'] = $this->w_model->select_seventeen_main_portfolio();
                $data['eighteen_main_portfolio'] = $this->w_model->select_eighteen_main_portfolio();
		$this->load->view('gallery', $data);
             
               
	}
          public function trainings()
	{
                $data = array();
                $data['all_header'] = $this->w_model->select_all_header();
                $data['all_trainings'] = $this->w_model->select_all_trainings();
                $data['first_trainings'] = $this->w_model->select_first_trainings();
                $data['second_trainings'] = $this->w_model->select_second_trainings();
                $data['third_trainings'] = $this->w_model->select_third_trainings();
                $data['fourth_trainings'] = $this->w_model->select_fourth_trainings();
                $data['fifth_trainings'] = $this->w_model->select_fifth_trainings();
                $data['sixth_trainings'] = $this->w_model->select_sixth_trainings();     
                $data['seventh_trainings'] = $this->w_model->select_seventh_trainings();  
                $data['eight_trainings'] = $this->w_model->select_eight_trainings();  
                $data['nine_trainings'] = $this->w_model->select_nine_trainings();  
                $data['ten_trainings'] = $this->w_model->select_ten_trainings();
                $data['eleven_trainings'] = $this->w_model->select_eleven_trainings();  
                $data['twelve_trainings'] = $this->w_model->select_twelve_trainings();  
                $data['thirteen_trainings'] = $this->w_model->select_thirteen_trainings();  
                $data['fourteen_trainings'] = $this->w_model->select_fourteen_trainings();  
                $data['fifteen_trainings'] = $this->w_model->select_fifteen_trainings();  
                $data['sixteen_trainings'] = $this->w_model->select_sixteen_trainings();  
                $data['seventeen_trainings'] = $this->w_model->select_seventeen_trainings();  
                $data['eighteen_trainings'] = $this->w_model->select_eighteen_trainings();  
		$this->load->view('trainings', $data);
	}
         public function news()
	{
                $data = array();
                $data['all_header'] = $this->w_model->select_all_header();
		$this->load->view('news', $data);
	}
         public function about()
	{
                $data = array();
                $data['all_header'] = $this->w_model->select_all_header();
                $data['all_about'] = $this->w_model->select_all_about();
                 $data['first_trainings'] = $this->w_model->select_first_trainings();
                $data['second_trainings'] = $this->w_model->select_second_trainings();
                $data['third_trainings'] = $this->w_model->select_third_trainings();
		$this->load->view('about', $data);
	}
         public function contact()
	{
                $data = array();
                $data['all_header'] = $this->w_model->select_all_header();
		$this->load->view('contact', $data);
	}
}
