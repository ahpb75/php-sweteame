<?php
class Instructor_controller extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('instructor_model');
	}

	public function index(){
		
	}

	/*public function add_note(){
		$app=$this->input->post('applicant');
		$note=$this->input->post('note');
		if($app==FALSE || $note==FALSE){
			return NULL;
		}
		else{
			$input=array($app,$note);
			$this->instructor_model->add_note($input);
		}
	}*/
//function to return the names of applicants so instructor can select who to comment on -chantal
    public function show_app(){

        $this->load->model('instructor_model');
        $data['applications'] = $this->instructor_model->show_applicants();
	if(is_null($data['applications'])){
		$this->load->view('error');
	}
	else{

        	$this->load->view('instructor_view_form1', $data);
	}
        //$this->load->view('footer');


    }

	public function get_app(){
		$course=$this->input->post('course');//@chantal search box needs to be named applicant, or you can change it.
		if($course==FALSE){
			$this->load->view('error');
		}
		else{
			$data['userinfo']=$this->instructor_model->get_course_applicants($course);
			//@chantal - load some view and pass $app, should contain an entire row from the application db that matches w/e name they chose
		}
		$this->load->view('instructor_view_form1',$data);
	}

	public function view_form1()
	{
		$data['userinfo'] = $this->instructor_model->view_form1();
        	$this->load->view('header_instructor');        
    		$this->load->view('instructor_view_form1',$data);

	}

	public function make_comment()
	{
		$data['comment'] = $this->instructor_model->view_comment();
        	$data['username'] = $this->input->post('username');
        	$this->load->view('header_instructor');
        	$this->load->view('instructor_view_comment',$data);
	}

	public function make_a_comment()
	{
        	$this->instructor_model->instructor_make_comment();
		$this->load->view('header_instructor');
		$data=$this->get_courses();
		$this->announcement();
		$this->load->view('instructor_home',$data);
	}

	public function announcement()
	{
		$this->load->model('admin_model');
    		$data['ss'] = $this->admin_model->get_announcement();
   		if($this->session->userdata('user_type') == '0')
   		{
   			$data['er'] = 1;
   		}
    	$this->load->view('announcement',$data);
	}

		public function get_courses(){
		$this->load->model('instructor_model');
		$data['courses']=$this->instructor_model->get_courses();
		return $data;
		/*$names is NOT an associative array, grab each row then use $row->lname or $row->fname*/
	}
}
?>
