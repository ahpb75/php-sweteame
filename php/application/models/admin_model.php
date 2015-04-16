<?php
class Admin_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    // function add_user()
    // {
    //     $data=array('username' => $this->input->post('username'),'password' => md5($this->input->post('password')),'permissions' => $this->input->post('permissions'));
    //     $this->db->insert('User',$data);
    // }
    function view_form1()
    {
        // $query = $this->db->get_where('User',array('permissions' => "2"));
        // return $query->result();
        $applicant = array("1","2");
        // foreach ($query->result() as $key => $value) {
        //     array_push($applicant,$value->username);
        // }
        return $applicant;
    }
    // function view_form2()
    // {
    //     $query = $this->db->get('Application');
    // }
    function view_comment()
    {
        $query = $this->db->get('Comment');
        foreach ($query->result() as $value)
        {
            $comment = array(
                'username' => $value->username,
                'comment' => $value->comment
                );
        }
        return $comment;
    }

}
?>