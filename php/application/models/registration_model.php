<?php
class Registration_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    function add_user()
    {
        $data=array('username' => $this->input->post('username'),'password' => $this->input->post('password'));
        $this->db->insert('User',$data);
    }
}
?>