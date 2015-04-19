<?php
class instructor_model extends CI_model{
	public function __construct(){
		parent::__construct();
		/*db preloaded from config files*/
	}	

	public function get_course_applicants($course){
		$sql='SELECT * FROM Application WHERE course_ID=? LIMIT 1';
		$query=$this->db->query($sql, $app);
		/*returns an array containing the whole row, should have all of the applicants application data in the order that the db is holding it.*/
		return $query->result();
	}

	public function add_note($input){
		$sql='INSERT INTO Application (note) VALUES (?) WHERE username=?';
		/*inserts the note passed in the input array into the note field corresponding to the username also passed in the input array*/
		$this->db->query($sql,array($input[1],$input[0]));
	}

    /*creating a function to show instructor all applicants -chantal*/
    public function show_applicants(){
        $sql1 = "SELECT * FROM Application";
        $query= $this->db->query($sql1);
        if($query->num_rows()>0){
		return $query->result();
        }
	return NULL;
    }

	public function get_courses(){
		$sql='SELECT courseID,course_name FROM Course ORDER BY courseID';
		$data=$this->db->query($sql);
		return $data->result();
	}
}
?>
