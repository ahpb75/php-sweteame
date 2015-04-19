

<?php
class Form_controller extends CI_Controller {
    private $custom_errors = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('form_model');

    }
    public function index()
    {
        $this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
        $this->form_validation->set_rules('studentID', 'Student ID', 'required|xss_clean');
        $this->form_validation->set_rules('position', 'TA or PLA', 'required|max_length[5]');
        $this->form_validation->set_rules('GPA', 'GPA', 'required|xss_clean');
        $this->form_validation->set_rules('program_level', 'If undergraduate, indicate program and level (ex. CS BA jr.)', 'xss_clean|max_length[15]');
        $this->form_validation->set_rules('graduate_program', 'MS or PhD (if graduate)', 'max_length[1]');
        $this->form_validation->set_rules('advisor', 'Advisors Name', 'xss_clean|max_length[30]');
		$this->form_validation->set_rules('phone', 'Phone Number (no spaces)', 'required|xss_clean|max_length[16]');
		$this->form_validation->set_rules('email', 'Email', 'xss_clean|valid_email|max_length[30]');			
		$this->form_validation->set_rules('gradDate', 'Graduation Date', 'required');
		$this->form_validation->set_rules('optScore', 'SPEAK/OPT Score', 'xss_clean|max_length[2]');
		$this->form_validation->set_rules('optWhen', 'Date of last OPT test', '');
		$this->form_validation->set_rules('GATO', 'Participated in GATO', 'required');


		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{

            $this->load->view('form_view');

        }
		else // passed validation proceed to post success logic
		{
            // build array for the model

            $form_data = array(
                'fname' => @$this->input->post('fname'),
                'lname' => @$this->input->post('lname'),
                'studentID' => @$this->input->post('studentID'),
                'position' => @$this->input->post('position'),
                'GPA' => @$this->input->post('GPA'),
                'program_level' => @$this->input->post('program_level'),
                'graduate_program' => @$this->input->post('graduate_program'),
                'advisor' => @$this->input->post('advisor'),
                'phone' => @$this->input->post('phone'),
                'email' => @$this->input->post('email'),
                'gradDate' => @$this->input->post('gradDate'),
                'optScore' => @$this->input->post('optScore'),
                'optWhen' => @$this->input->post('optWhen'),
                'GATO' => @$this->input->post('GATO'),
                'SPEAK' => @$this->input->post('SPEAK'),
                'SPEAKdate' => @$this->input->post('SPEAKdate'),
                'ONITA' => @$this->input->post('ONITA'),
                'ONITA_date' => @$this->input->post('ONITA_date')
            );

         //run insert model to write data to db


           if ($this->form_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
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


    public function success()
    {
        $this->load->view("success");
    }
}
?>