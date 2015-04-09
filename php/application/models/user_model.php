<?php
/**
 * Created by PhpStorm.
 * User: ahpeth
 * Date: 4/5/15
 * Time: 3:26 PM
 */
class User_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    // function add_user()
    // {
    //     $data=array(
    //         'username'=>$this->input->post('username'),
    //         // 'password'=>md5($this->input->post('password')));
    //         'userID'=>$this->input->('3'));
    //         $this->db->insert('User',$data);
    // }
    function login()
    {
        $query = $this->db->get_where('User',array('username' => $this->input->post('username'),'password' => $this->input->post('password')));

        if($query->num_rows()>0)
        {
            foreach($query->result() as $key => $row)
            {
                // add all data to session
                if ($key == 'username')
                    $user_name = $row;
                if ($key == 'permissions')
                    $permissions = $row;
                $newdata = array(
                    'user_name' => $user_name,
                    'logged_in' => TRUE,
                    'user_type' => 2
                    );
            }

            $this->session->set_userdata($newdata);
            return TRUE;
        }
        return FALSE;
    }
}
?>