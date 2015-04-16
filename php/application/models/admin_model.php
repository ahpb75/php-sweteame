<?php
class Admin_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    function view_form1()
    {
        $query = $this->db->get_where('User',array('permissions' => "2"));
        // return $query->result();
        $applicant = array();
        foreach ($query->result() as $key => $value) {
            array_push($applicant,$value->username);
            array_push($applicant,$value->comment);
        }
        return $applicant;
    }
    function view_form2()
    {
        $query = $this->db->get_where('Application',array('username' => $this->input->post('username')));
        $application = array();
        $empty = "";
        if ($query->num_rows()>0)
        {
            foreach ($query->result() as $value)
            {
                array_push($application,$value);
            }
        return $application;
        }      
        return $empty;
    }
    // function view_comment()
    // {
    //     $query = $this->db->get('Comment');
    //     foreach ($query->result() as $value)
    //     {
    //         $comment = array(
    //             'username' => $value->username,
    //             'comment' => $value->comment
    //             );
    //     }
    //     return $comment;
    // }
    function create_course()
    {
        $data=array('course_name' => $this->input->post('Coursename'),'courseID' => $this->input->post('CourseId'));
        $this->db->insert('Course',$data);
    }
}
?>