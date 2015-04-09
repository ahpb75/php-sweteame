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
	// public function index(){
	// 	$this->load->view('welcome_message');
	// }
	public function index()
	{
		if($this->session->userdata('user_name') != "")
		{
			if ($this->session->userdata('user_type') == 2)//applicant
				$this->load->view('form_view');
			else if($this->session->userdata('user_type') == 1)//staff
				$this->load->view('thanks');
			else if($this->session->userdata('user_type') == 0)//admin
				$this->load->view('test');
		}
		else
		{
			$this->load->view('login');
		}
	}
	public function registration()
	{
		$this->load->view('registration');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
		if($this->form_validation->run() == FALSE) 
		{
			$this->registration();
		}
		else 
		{
			$this->user_model->add_user();
			$this->thanks();
		}
	}
	public function login()
	{
		$this->load->model('user_model');
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
				$result = $this->user_model->login();
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
	// public function test()
	// {
	// 	$this->load->view('test');
	// }
    public function apply(){
        $this->load->view('form_view');
    }
    public function thanks(){
    	$this->load->view('thanks');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */