<?php
class Instructor_controller extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('instructor_model');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('Instructor_view');
		$this->load->view('footer');
		
		if($this->input->post('view')){
			$app=$this->input->post('applicant');
			if($app!=FALSE){
				$data=$this->Instructor_model->get_applicant_data($app);
				$this->load->view('Form_view',$data);
			}
			else{
				/*error message of some sort?*/
			}
		}
		if($this->input->post('add_note')){
			$app=$this->input->post('applicant');
			$note=$this->input->post('note');
			if($app!=FALSE && $note!=FALSE){
				$input=array($app,$note);
				$this->db->add_note($input);
			}
			else{
				/*some sort or error message?*/
			}
		}
	}
}
?>
