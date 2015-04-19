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
			$this->instructor_model->add_note($input);
		}
	}
//function to return the names of applicants so instructor can select who to comment on -chantal
    public function show_app(){

        $this->load->model('instructor_model');
        $data['applications'] = $this->instructor_model->show_applicants();
	if(is_null($data['applications'])){
		$this->load->view('error');
	}
	else{
        	$this->load->view('header');
        	$this->load->view('Instructor_view', $data);
	}
        //$this->load->view('footer');


    }

	public function get_app(){
		$course=$this->input->post('course');//@chantal search box needs to be named applicant, or you can change it.
		if($course==FALSE){
			$data['applications']= NULL;
		}
		else{
			$data['applications']=$this->Instructor_model->get_course_applicants($app);
			//@chantal - load some view and pass $app, should contain an entire row from the application db that matches w/e name they chose
		}
		$this->load->view('instructor_choose',$data);
	}
}
?>
