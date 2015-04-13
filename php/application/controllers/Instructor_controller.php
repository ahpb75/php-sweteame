<?php
class Instructor_controller extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('instructor_model');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('instructor_home');
		//$this->load->view('footer');
		
		if($this->input->post('view')){
			$app=$this->input->post('applicant');
			if($app!=FALSE){/*checking to make sure the applicant exists*/
				/*searches DB for the applicants application and returns an array of the whole row returned. Then passing that array of data to the form view for display*/
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
			/*checking to make sure the applicant and note fields aren't NULL*/
			if($app!=FALSE && $note!=FALSE){
				/*placing applicant/note into an array to be used in the query*/
				$input=array($app,$note);
				$this->db->add_note($input);
			}
			else{
				/*some sort or error message?*/
			}
		}
	}
//function to return the names of applicants so instructor can select who to comment on -chantal
    public function show_app(){

        //$this->load->model('instructor_model');
       $data['applicants'] = $this->instructor_model->show_applicants();
        $this->load->view('header');
        $this->load->view('Instructor_view', $data);
        //$this->load->view('footer');


    }
}
?>
