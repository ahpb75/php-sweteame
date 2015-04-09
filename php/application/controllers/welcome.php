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
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('login_model');
		$this->load->model('registration_model');
	}
	public function index()
	{
		if($this->session->userdata('user_name') != "")
		{
			if ($this->session->userdata('user_type') == '2')//applicant
				$this->load->view('form_view');
			else if($this->session->userdata('user_type') == '1')//staff
				$this->load->view('staff_view');
			else if($this->session->userdata('user_type') == '0')//admin
				$this->load->view('admin_view');
		}
		else
		{
			$this->load->view('login');
		}
	}
	public function registration()
	{
		$this->load->view('registration');
	}
	public function registration_logic()
	{
		// $this->load->model('registration_model');
		if($this->session->userdata('user_name') != "")
		{
			$this->index;
		}
		else
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','trim|required|min_length[4]|xss_clean');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
			$this->form_validation->set_rules('permissions','User Type','required');
			if($this->form_validation->run() == FALSE) 
			{
				$this->error();
			}
			else 
			{
				$this->registration_model->add_user();
				$this->index();
			}
		}
	}
	public function login()
	{
		$this->load->model('login_model');
		// if($this->session->userdata('user_name') != "")
		// 	$this->load->view('login');
		// else{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() == FALSE)
			{
				$this->error();
			}
			else
			{
				$result = $this->login_model->login();
				if($result)
				{
					$this->index();
				}
				else
				{
					$this->error();
				}
			}
		// }
	}
	public function test()
	{
		$this->load->view('test');
	}
	public function logout()
	{
		$this->session->sess_destroy();
	}
    public function apply()
    {
        $this->load->view('form_view');
    }
    public function error()
    {
    	$this->load->view('error');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */