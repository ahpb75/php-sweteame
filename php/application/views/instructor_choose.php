<!--@Chantal - this page will have a $options array holding all the course names so you can display the drop down box, that's basically all this page needs to do. When they press the button to search please call the get_app() method and it should bring up a list of applicants associated to the right course. -->
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
<body>

<h1> Computer Science Department </h1>
<h2> Courses </h2>


<span> Choose course to see Applicants</span> 
<select> 
	<option value = "first applicant"> First Applicant </option>

</select>

 <?php

 $this->load->helper('form');
echo form_open('Instructor_controller/getapp');
echo form_dropdown('dropdown_menu', $options);
echo form_submit('course_submit','submit');
 ?>  



</body>

</html>
