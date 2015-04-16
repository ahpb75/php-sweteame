<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

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
	}

// 	public function index(){
// 		$this->load->view('header');
// 		$this->load->view('admin_home');
// 		//$this->load->view('footer');
		
// 		if($this->input->post('view')){
// 			$app=$this->input->post('applicant');
// 			if($app!=FALSE){/*checking to make sure the applicant exists*/
// 				/*searches DB for the applicants application and returns an array of the whole row returned. Then passing that array of data to the form view for display*/
// 				$data=$this->Admin_model->get_applicant_data($app);
// 				$this->load->view('Form_view',$data);
// 			}
// 			else{
// 				/*error message of some sort?*/
// 			}
// 		}
// 		if($this->input->post('add_note')){
// 			$app=$this->input->post('applicant');
// 			$note=$this->input->post('note');
// 			/*checking to make sure the applicant and note fields aren't NULL*/
// 			if($app!=FALSE && $note!=FALSE){
// 				/*placing applicant/note into an array to be used in the query*/
// 				$input=array($app,$note);
// 				$this->db->add_note($input);
// 			}
// 			else{
// 				/*some sort or error message?*/
// 			}
// 		}
// 	}
// //function to return the names of applicants so instructor can select who to comment on -chantal
//     public function show_app(){

//         //$this->load->model('admin_model');
//        $data['applicants'] = $this->admin_model->show_applicants();
//         $this->load->view('header');
//         $this->load->view('Admin_view', $data);
//         //$this->load->view('footer');


//     }
    // public function view_form()
    // {
    // 	$data = $this->admin_model->view_form();
    // 	$this->load->view('admin_view_form',$data);
    // }
    public function test()
    {
    	$this->load->view("test");
    }
}
?>
