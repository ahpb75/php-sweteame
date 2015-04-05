<!--
* Created by PhpStorm.
* User: ahpb75_sprint1
* Date: 4/2/15
* Time: 6:53 PM -->
<DOCTYPE! HTML>

<head>
    <title>TA/PLA Application Form</title>
</head>

<body>
<h1>Computer Science Department<br/></h1>
<h2>Graduate Teaching Assistant Application<br/></h2>

<fieldset><legend>form_view</legend>
    <?php
    $attributes = array('class' => 'form-horizontal', 'id' => '');
    echo form_open('Form_controller', $attributes); ?>
    <div class="control-group">
        <label for="app_type" class="control-label">TA or PLA <span class="required">*</span></label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="app_type" class="radio">
                <input id="app_type" name="app_type" type="radio" class="" value="TA" <?php echo $this->form_validation->set_radio('app_type', 'TA'); ?> />
                TA
            </label>
            <label for="app_type" class="radio">
                <input id="app_type" name="app_type" type="radio" class="" value="PLA" <?php echo $this->form_validation->set_radio('app_type', 'PLA'); ?> />
               PLA
            </label>
            <?php echo form_error('app_type'); ?>
        </div>
    </div>

    <div class="control-group">
        <label for="gpa" class="control-label">GPA <span class="required">*</span></label>
        <div class='controls'>
            <input id="gpa" type="text" name="gpa"  value="<?php echo set_value('gpa'); ?>"  />
            <?php echo form_error('gpa'); ?>
        </div>
    </div><div class="control-group">
        <label for="program_level" class="control-label">If undergraduate, indicate program and level (ex. CS BA jr.)</label>
        <div class='controls'>
            <input id="program_level" type="text" name="program_level" maxlength="15" value="<?php echo set_value('program_level'); ?>"  />
            <?php echo form_error('program_level'); ?>
        </div>
    </div><div class="control-group">
        <label for="graduate_program" class="control-label">MS or PhD (if graduate)</label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="graduate_program" class="radio">
                <input id="graduate_program" name="graduate_program" type="radio" class="" value="MS" <?php echo $this->form_validation->set_radio('graduate_program', 'option1'); ?> />
                MS
            </label>
            <label for="graduate_program" class="radio">
                <input id="graduate_program" name="graduate_program" type="radio" class="" value="PhD" <?php echo $this->form_validation->set_radio('graduate_program', 'option2'); ?> />
                PhD
            </label>
            <?php echo form_error('graduate_program'); ?>
        </div>
    </div>

    <div class="control-group">
        <label for="advisor" class="control-label">Advisor's Name</label>
        <div class='controls'>
            <input id="advisor" type="text" name="advisor" maxlength="30" value="<?php echo set_value('advisor'); ?>"  />
            <?php echo form_error('advisor'); ?>
        </div>
    </div><div class="control-group">
        <label for="phone" class="control-label">Phone Number (no spaces) <span class="required">*</span></label>
        <div class='controls'>
            <input id="phone" type="text" name="phone" maxlength="11" value="<?php echo set_value('phone'); ?>"  />
            <?php echo form_error('phone'); ?>
        </div>
    </div><div class="control-group">
        <label for="email" class="control-label">Email</label>
        <div class='controls'>
            <input id="email" type="text" name="email" maxlength="30" value="<?php echo set_value('email'); ?>"  />
            <?php echo form_error('email'); ?>
        </div>
    </div><div class="control-group">
        <label for="graduation_date" class="control-label">Graduation Date <span class="required">*</span></label>
        <div class='controls'>
            <input class="datepicker" type="text" name="graduation_date"  value="<?php echo set_value('graduation_date'); ?>"  />
            <?php echo form_error('graduation_date'); ?>
        </div>
    </div><div class="control-group">
        <label for="current_course" class="control-label">Course(s) currently teaching</label>
        <div class='controls'>
            <?php echo form_textarea( array( 'name' => 'current_course', 'rows' => '5', 'cols' => '80', 'value' => set_value('current_course') ) )?>
            <?php echo form_error('current_course'); ?>
        </div>
    </div>
    <div class="control-group">
        <label for="previous_course" class="control-label">Course(s) previously taught</label>
        <div class='controls'>
            <?php echo form_textarea( array( 'name' => 'previous_course', 'rows' => '5', 'cols' => '80', 'value' => set_value('previous_course') ) )?>
            <?php echo form_error('previous_course'); ?>
        </div>
    </div>
    <div class="control-group">
        <label for="want_teach" class="control-label">Course(s) you would like to teach (must have taken previously, include grades received) <span class="required">*</span></label>
        <div class='controls'>
            <?php echo form_textarea( array( 'name' => 'want_teach', 'rows' => '5', 'cols' => '80', 'value' => set_value('want_teach') ) )?>
            <?php echo form_error('want_teach'); ?>
        </div>
    </div>
    <div class="control-group">
        <label for="opt_score" class="control-label">SPEAK/OPT Score</label>
        <div class='controls'>
            <input id="opt_score" type="text" name="opt_score" maxlength="2" value="<?php echo set_value('opt_score'); ?>"  />
            <?php echo form_error('opt_score'); ?>
        </div>
    </div><div class="control-group">
        <label for="lastopt_date" class="control-label">Date of last OPT test</label>
        <div class='controls'>
            <input class="datepicker" type="text" name="lastopt_date"  value="<?php echo set_value('lastopt_date'); ?>"  />
            <?php echo form_error('lastopt_date'); ?>
        </div>
    </div><div class="control-group">
        <label for="participated_in_gato" class="control-label">Participated in GATO <span class="required">*</span></label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="participated_in_gato" class="radio">
                <input id="participated_in_gato" name="participated_in_gato" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('participated_in_gato', 'option1'); ?> />
                Requirement Met
            </label>
            <label for="participated_in_gato" class="radio">
                <input id="participated_in_gato" name="participated_in_gato" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('participated_in_gato', 'option2'); ?> />
                Will Attend in Aug/Jan
            </label>
            <?php echo form_error('participated_in_gato'); ?>
        </div>
    </div>

    <div class="control-group">
        <label for="taken_speak_test" class="control-label">Taken SPEAK Test <span class="required">*</span></label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="taken_speak_test" class="radio">
                <input id="taken_speak_test" name="taken_speak_test" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('taken_speak_test', 'option1'); ?> />
                Requirement Met
            </label>
            <label for="taken_speak_test" class="radio">
                <input id="taken_speak_test" name="taken_speak_test" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('taken_speak_test', 'option2'); ?> />
                Not Met (Enter Date Below)
            </label>
            <?php echo form_error('taken_speak_test'); ?>
        </div>
    </div>

    <div class="control-group">
        <label for="speak_assigned_date" class="control-label">*SPEAK Assigned Date</label>
        <div class='controls'>
            <input class="datepicker" type="text" name="speak_assigned_date"  value="<?php echo set_value('speak_assigned_date'); ?>"  />
            <?php echo form_error('speak_assigned_date'); ?>
        </div>
    </div><div class="control-group">
        <label for="onita_requirement" class="control-label">ONITA requirement (international students)</label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="onita_requirement" class="radio">
                <input id="onita_requirement" name="onita_requirement" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('onita_requirement', 'option1'); ?> />
                Requirement Met
            </label>
            <label for="onita_requirement" class="radio">
                <input id="onita_requirement" name="onita_requirement" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('onita_requirement', 'option2'); ?> />
                Will Attend in Aug/Jan
            </label>
            <?php echo form_error('onita_requirement'); ?>
        </div>
    </div>


    <div class="control-group">
        <label></label>
        <div class='controls'>
            <?php echo form_submit( 'submit', 'Submit'); ?>
        </div>
    </div>
    <?php echo form_close(); ?></fieldset>
</body>