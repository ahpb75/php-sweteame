<?php
class instructor_model extends CI_model{
	public function __construct(){
		parent::__construct();
		/*db preloaded from config files*/
	}	

	public function get_applicant_data($app){
		$sql='SELECT * FROM application WHERE username=? LIMIT 1';
		$data=$this->db->query($sql, $app);
		return $data;
	}

	public function add_note($input){
		$sql='INSERT INTO application (note) VALUES (?) WHERE username=?';
		$this->db->query($sql,array($input[1],$input[0]));
	}
}
?>
