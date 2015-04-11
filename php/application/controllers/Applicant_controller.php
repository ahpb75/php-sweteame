<?php
class Applicant_controller extends CI_controller{
	private $custom_errors=array();
	public function __construct(){
	parrent::__construct();
	/*database preloaded from config files*/
	$this->load->model('applicant_model')
	}

	public function index(){
		this->load->view('header');
		this->load->view('applicant_home');
		this->load->view('footer');
		/*checking which button was pressed in the applicant home view. Edit will pull application from the database and call the form view while passing the application data. The new button will just bring up the form view which should remain blank.*/
		if($this->input->post('new')){
			$this->load->view('header');
			$this->load->view('form_view');
			$this->load->view('footer');
		}
		if($this->input->post('edit')){
			$form_data=$this->applicant_model->get_form_data($this->session->userdata('username'));
			$this->load->view('header');
			$this->load->view('form_view',$form_data);
			$this->load->view('footer');
		}
	}
}
?>
