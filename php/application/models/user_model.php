<?php
/**
 * Created by PhpStorm.
 * User: ahpeth
 * Date: 4/5/15
 * Time: 3:26 PM
 */
class Form_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    function add_user()
    {
        $data=array(
            'username'=>$this->input->post('username'),
            // 'password'=>md5($this->input->post('password')));
            $this->db->insert('User',$data);
    }
}
?>