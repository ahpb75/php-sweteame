<?php
class Login_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function get_username(){
		$this->db->get_where('user',array('username'=>$username)
	}
}
?>
