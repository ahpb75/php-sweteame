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
        foreach ($query->result as $key => $value) {
            $form = array('GPA' => $value->GPA);
        }
        return $form;
    }
     // $form_data = array(
     //            'position' => @$this->input->post('position'),
     //            'GPA' => @$this->input->post('GPA'),
     //            'program_level' => @$this->input->post('program_level'),
     //            'graduate_program' => @$this->input->post('graduate_program'),
     //            'advisor' => @$this->input->post('advisor'),
     //            'phone' => @$this->input->post('phone'),
     //            'email' => @$this->input->post('email'),
     //            'gradDate' => @$this->input->post('gradDate'),
     //            'optScore' => @$this->input->post('optScore'),
     //            'optWhen' => @$this->input->post('optWhen'),
     //            'GATO' => @$this->input->post('GATO'),
     //            'SPEAK' => @$this->input->post('SPEAK'),
     //            'SPEAKdate' => @$this->input->post('SPEAKdate'),
     //            'ONITA' => @$this->input->post('ONITA'),
     //            'ONITA_date' => @$this->input->post('ONITA_date')
     //        );

}
?>