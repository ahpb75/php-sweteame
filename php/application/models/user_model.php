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
            'userID'=>$this->input->('3'));
            $this->db->insert('User',$data);
    }
    function login()
    {
        $this->db->where("username",$this->input->post('username'));
        $this->db->where("password",$this->input->post('pass'));
        $query = $this->db->get("User");

        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                // add all data to session
                $newdata = array(
                    'user_name' => $row->username,
                    'logged_in' => TRUE
                    );
            }

            $this->session->set_userdata($newdata);
            return TRUE;
        }
        return FALSE;
    }
?>