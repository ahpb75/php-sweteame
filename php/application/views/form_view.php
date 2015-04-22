<!--
* Created by PhpStorm.
* User: ahpb75_sprint1
* Date: 4/2/15
* Time: 6:53 PM -->
<DOCTYPE! HTML>

<head>
    <title>TA/PLA Application Form</title>

    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.min.css"/>
</head>

<style>

    input {
        max-width: 75%;
    }
    .required {
        color: red;
    }
</style>

<body>
<center>
<h1>Computer Science Department<br/></h1>
<h2>Graduate Teaching Assistant Application<br/></h2>
</center>

<div class="container">
    <hr/>
    <h3>Fill out the form below:</h3>
    <div class="span5">

    <?php
    $attributes = array('class' => 'form-horizontal', 'id' => '');
    echo form_open('Form_controller', $attributes); ?>



    <div class="form-group">
        <label for="fname">First Name <span class="required">*</span></label>
        <input id="fname" type="text" name="fname" class="form-control" placeholder="John" value="<?php echo set_value('fname'); ?>"  />
        <?php echo form_error('fname'); ?>
    </div>

    <div class="form-group">
        <label for="lname">Last Name <span class="required">*</span></label>
        <input id="lname" type="text" name="lname" class="form-control" placeholder="Doe" value="<?php echo set_value('lname'); ?>"  />
        <?php echo form_error('lname'); ?>
    </div>

    <div class="form-group">
        <label for="studentID">Student ID <span class="required">*</span></label>
        <input id="studentID" type="text" name="studentID" class="form-control" placeholder="12345678" value="<?php echo set_value('studentID'); ?>"  />
        <?php echo form_error('studentID'); ?>
    </div>

    <div class="form-inline">
        <label for="position">TA or PLA <span class="required">*</span></label>
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="position" class="radio">
                <input id="position" name="position" type="radio" class="form-control" value="1" <?php echo $this->form_validation->set_radio('position', '1'); ?> />
                TA
            </label>
            <label for="position" class="radio">
                <input id="position" name="position" type="radio" class="form-control" value="0" <?php echo $this->form_validation->set_radio('position', '0'); ?> />
               PLA
            </label>
            <?php echo form_error('position'); ?>
    </div>


    <div class="form-group">
        <label for="GPA">GPA <span class="required">*</span></label>
            <input id="GPA" type="text" name="GPA" class="form-control" placeholder="4.0" value="<?php echo set_value('GPA'); ?>"  />
            <?php echo form_error('GPA'); ?>
    </div>
    <div class="form-group">
        <label for="program_level">If undergraduate, indicate program and level (ex. CS BA jr.)</label>
            <input id="program_level" class="form-control" type="text" placeholder="CS BS sr." name="program_level" maxlength="15" value="<?php echo set_value('program_level'); ?>"  />
            <?php echo form_error('program_level'); ?>
    </div>
    <div class="form-inline">
        <label for="graduate_program" class="control-label">MS or PhD (if graduate)</label>
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="graduate_program" class="radio">
                <input id="graduate_program" class="form-control" name="graduate_program" type="radio" value="1" <?php echo $this->form_validation->set_radio('graduate_program', '1'); ?> />
                MS
            </label>
            <label for="graduate_program" class="radio">
                <input id="graduate_program" class="form-control" name="graduate_program" type="radio" value="0" <?php echo $this->form_validation->set_radio('graduate_program', '0'); ?> />
                PhD
            </label>
            <?php echo form_error('graduate_program'); ?>
    </div>


    <div class="form-group">
        <label for="advisor" class="control-label">Advisors Name<span class="required">*</span></label>
            <input id="advisor" class="form-control" type="text" placeholder="Mr. Sir" name="advisor" maxlength="30" value="<?php echo set_value('advisor'); ?>"  />
            <?php echo form_error('advisor'); ?>
    </div>

    <div class="form-group">
        <label for="phone" class="control-label">Phone Number (no spaces)<span class="required">*</span></label>
            <input id="phone" class="form-control" type="text" placeholder="1234567890" name="phone" maxlength="11" value="<?php echo set_value('phone'); ?>"  />
            <?php echo form_error('phone'); ?>
    </div>
    <div class="form-group">
        <label for="email" class="control-label">Email<span class="required">*</span></label>

            <input id="email" class="form-control" type="text" placeholder="myemail@mail.missouri.edu" name="email" maxlength="30" value="<?php echo set_value('email'); ?>"  />
            <?php echo form_error('email'); ?>

    </div>
    <div class="form-group">
        <label for="gradDate" class="control-label">Graduation Date (YYYY-MM-DD)<span class="required">*</span></label>
            <input class="datepicker form-control"  type="text" placeholder="2016-12-16" name="gradDate"  value="<?php echo set_value('gradDate'); ?>"  />

            <?php echo form_error('gradDate'); ?>
    </div>

        <div class="form-group">
                <label for="course_name" class="control-label">Course you would like to teach (must have taken previously):</label>
            <?php
            echo"<span> Choose an Applicant to view their Application</span> ";
            echo " <select name = 'course_name'> ";
            foreach ($courses as $row){
                foreach($row as $key => $value){
                    echo "<option value =".set_value($value).">".$value."</option>";
                }
                //echo "<li>".$key." => ".$value."</li>";
                // echo "=======================";
                // echo "<br>";
                // echo "<br>";
            }
            echo "</select>";
            ?>
            <label for="grade" class="control-label">Grade Received:<span class="required">*</span></label>
            <select name="grade">
                <option value="<?php echo set_value('A'); ?>">A</option>
                <option value="<?php echo set_value('A-'); ?>">A-</option>
                <option value="<?php echo set_value('B+'); ?>">B+</option>
                <option value="<?php echo set_value('B'); ?>">B</option>
                <option value="<?php echo set_value('B-'); ?>">B-</option>
                <option value="<?php echo set_value('C+'); ?>">C+</option>
                <option value="<?php echo set_value('C'); ?>">C</option>
                <option value="<?php echo set_value('C-'); ?>">C-</option>
            </select>
        </div>




    <div class="form-group">
        <label for="optScore" class="control-label">SPEAK/OPT Score</label>
            <input id="optScore" placeholder="5" class="form-control" type="text" name="optScore" maxlength="2" value="<?php echo set_value('optScore'); ?>"  />

            <?php echo form_error('optScore'); ?>

    </div>
    <div class="form-group">
        <label for="optWhen" class="control-label">Date of last OPT test (YYYY-MM-DD)</label>
            <input id="optWhen" class="datepicker form-control" type="text" name="optWhen"  placeholder="YEAR-MONTH-DAY" value="<?php echo set_value('optWhen'); ?>"  />
            <?php echo form_error('optWhen'); ?>
    </div>
    <div class="form-inline">
        <label for="GATO">Participated in GATO<span class="required">*</span> &nbsp;</label>
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="GATO" class="radio">
                <input id="GATO" name="GATO" type="radio" class="form-control" value="1" <?php echo $this->form_validation->set_radio('GATO', '1'); ?> />
                Requirement Met
            </label>
            <label for="GATO" class="radio">
                <input id="GATO" name="GATO" type="radio" class="form-control" value="0" <?php echo $this->form_validation->set_radio('GATO', '0'); ?> />
                Will Attend in Aug/Jan
            </label>
            <?php echo form_error('GATO'); ?>
    </div>

    <div class="form-inline">
        <label for="SPEAK">Taken SPEAK Test <span class="required">*</span>&nbsp;</label>

            <label for="SPEAK" class="radio">
                <input id="SPEAK" name="SPEAK" type="radio" class="form-control" value="1" <?php echo $this->form_validation->set_radio('SPEAK', '1'); ?> />
                Requirement Met
            </label>
            <label for="SPEAK" class="radio">
                <input id="SPEAK" name="SPEAK" type="radio" class="form-control" value="0" <?php echo $this->form_validation->set_radio('SPEAK', '0'); ?> />
                Not Met (Enter Date Below)
            </label>
            <?php echo form_error('SPEAK'); ?>

    </div>

    <div class="form-group">
        <label for="SPEAKdate" class="control-label">SPEAK Assigned Date (YYYY-MM-DD)</label>

            <input id="SPEAKdate" class="datepicker form-control" type="text" name="SPEAKdate" placeholder="YEAR-MONTH-DAY"  value="<?php echo set_value('SPEAKdate'); ?>"  />
            <?php echo form_error('SPEAKdate'); ?>

    </div>

    <div class="form-inline">
        <label for="ONITA" class="control-label">ONITA requirement (international students)</label>

            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="ONITA" class="radio">
                <input id="ONITA" name="ONITA" type="radio" class="form-control" value="1" <?php echo $this->form_validation->set_radio('ONITA', '1'); ?> />
                Requirement Met
            </label>
            <label for="ONITA" class="radio">
                <input id="ONITA" name="ONITA" type="radio" class="form-control" value="0" <?php echo $this->form_validation->set_radio('ONITA', '0'); ?> />
                Will Attend in Aug/Jan
            </label>
            <?php echo form_error('ONITA'); ?>

    </div>
        <div class="form-group">
            <label for="ONITA_date" class="control-label">ONITA Assigned Date</label>

                <input class="datepicker form-control" type="text" id="ONITA_date" name="ONITA_date" placeholder="YEAR-MONTH-DAY"  value="<?php echo set_value('ONITA_date'); ?>"  />
                <?php echo form_error('ONITA_date'); ?>

        </div>
    <div class="form-group">
        <input id="user_name" type="hidden" name="user_name" class="form-control" value="<?php echo set_value($this->session->userdata('user_name')); ?>"  />
    </div>

<script>
    $(function(){
        $.datepicker.formatDate( "yy-mm-dd");
        $( '.datepicker' ).datepicker();
    });

</script>


    <div class="form-group">
        <label></label>
        <hr/>

          <center><?php echo form_submit( 'submit', 'Submit'); ?></center>

    </div>
    <?php echo form_close(); ?>
</div>
</div>

</body>