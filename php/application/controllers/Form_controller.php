<?php
class Form_controller extends CI_Controller {
    private $custom_errors = array();
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Form_model');
    }
    function index()
    {
        $this->form_validation->set_rules('position', 'TA or PLA', 'required|max_length[5]');
        $this->form_validation->set_rules('gpa', 'GPA', 'required|xss_clean');
        $this->form_validation->set_rules('program_level', 'If undergraduate, indicate program and level (ex. CS BA jr.)', 'xss_clean|max_length[15]');
        $this->form_validation->set_rules('graduate_program', 'MS or PhD (if graduate)', 'max_length[1]');
        $this->form_validation->set_rules('advisor', 'Advisors Name', 'xss_clean|max_length[30]');
		$this->form_validation->set_rules('phone', 'Phone Number (no spaces)', 'required|xss_clean|max_length[11]');			
		$this->form_validation->set_rules('email', 'Email', 'xss_clean|valid_email|max_length[30]');			
		$this->form_validation->set_rules('graduation_date', 'Graduation Date', 'required');			
		$this->form_validation->set_rules('current_course', 'Course(s) currently teaching', 'xss_clean');			
		$this->form_validation->set_rules('previous_course', 'Course(s) previously taught', 'xss_clean');			
		$this->form_validation->set_rules('want_teach', 'Course(s) you would like to teach (must have taken previously, include grades received)', 'required|xss_clean');			
		$this->form_validation->set_rules('opt_score', 'SPEAK/OPT Score', 'xss_clean|max_length[2]');			
		$this->form_validation->set_rules('lastopt_date', 'Date of last OPT test', '');			
		$this->form_validation->set_rules('participated_in_gato', 'Participated in GATO', 'required');			
		$this->form_validation->set_rules('taken_speak_test', 'Taken SPEAK Test', 'required|max_length[1]');			
		$this->form_validation->set_rules('speak_assigned_date', '*SPEAK Assigned Date', '');			
		$this->form_validation->set_rules('onita_requirement', 'ONITA requirement (international students)', 'max_length[1]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{

            $this->load->view('form_view');

        }
		else // passed validation proceed to post success logic
		{
            // build array for the model

            $form_data = array(
                'position' => @$this->input->post('position'),
                'GPA' => @$this->input->post('GPA'),
                'program_level' => @$this->input->post('program_level'),
                'graduate_program' => @$this->input->post('graduate_program'),
                'advisor' => @$this->input->post('advisor'),
                'phone' => @$this->input->post('phone'),
                'email' => @$this->input->post('email'),
                'graduation_date' => @$this->input->post('graduation_date'),
                'current_course' => @$this->input->post('current_course'),
                'previous_course' => @$this->input->post('previous_course'),
                'want_teach' => @$this->input->post('want_teach'),
                'opt_score' => @$this->input->post('opt_score'),
                'lastopt_date' => @$this->input->post('lastopt_date'),
                'participated_in_gato' => @$this->input->post('participated_in_gato'),
                'taken_speak_test' => @$this->input->post('taken_speak_test'),
                'speak_assigned_date' => @$this->input->post('speak_assigned_date'),
                'onita_requirement' => @$this->input->post('onita_requirement')
            );

            // run insert model to write data to db

            if ($this->Form_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
            {
                redirect('Form_controller/success');   // or whatever logic needs to occur
            }
            else
            {
                echo 'An error occurred saving your information. Please try again later';
                // Or whatever error handling is necessary
            }
        }
	}


    function success()
    {
        $this->load->view("success");
    }
}
?>