<?php
class Instructor_controller extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('instructor_model');
	}

	public function index(){
		
	}

	public function add_note(){
		$app=$this->input->post('applicant');
		$note=$this->input->post('note');
		if($app==FALSE || $note==FALSE){
			return NULL;
		}
		else{
			$input=array($app,$note);
			$this->Instructor_model->add_note($input);
		}
	}
//function to return the names of applicants so instructor can select who to comment on -chantal
    public function show_app(){

        //$this->load->model('instructor_model');
        //$application = $this->instructor_model->show_applicants();
        $this->load->view('header');
        $this->load->view('instructor_home');
        //$this->load->view('Instructor_view', $application);
        //$this->load->view('footer');


    }

	public function get_app(){
		$app=$this->input->post('applicant');//@chantal search box needs to be named applicant, or you can change it.
		if($app==FALSE){
			return NULL;
		}
		else{
			$data=$this->Instructor_model->get_applicant_data($app);
			//@chantal - load some view and pass $app, should contain an entire row from the application db that matches w/e name they chose
		}
	}
}
?>
