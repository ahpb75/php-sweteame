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
    function view_form()
    {
        $query = $this->db->get('Application');
        // return $query->result();
        foreach ($query->result() as $key => $value) {
            $form = array(
                'appID' => $value->appID,
                'position' => $value->position,
                'GPA' => $value->GPA,
                'program_level' => $value->program_level,
                'graduate_program' => $value->graduate_program,
                'advisor' => $value->advisor,
                'phone' => $value->phone,
                'email' => $value->email,
                'gradDate' => $value->gradDate,
                'optScore' => $value->optScore,
                'optWhen' => $value->optWhen,
                'GATO' => $value->GATO,
                'SPEAK' => $value->SPEAK,
                'SPEAKdate' => $value->SPEAKdate,
                'ONITA' => $value->ONITA,
                'ONITA_date' => $value->ONITA_date,
                'note' => $value->note,
                'assignment' => $value->assignment
                );
        }
        return $form;
    }
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
    }

}
?>