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

<fieldset><legend>Apply Here</legend>
    <?php
    $attributes = array('class' => 'form-horizontal', 'id' => '');
    echo form_open('Form_controller', $attributes); ?>

    <div class="control-group">
        <label for="position" class="control-label">TA or PLA <span class="required">*</span></label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="position" class="radio">
                <input id="position" name="position" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('position', '1'); ?> />
                TA
            </label>
            <label for="position" class="radio">
                <input id="position" name="position" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('position', '0'); ?> />
               PLA
            </label>
            <?php echo form_error('position'); ?>
        </div>
    </div>

    <div class="control-group">
        <label for="GPA" class="control-label">GPA <span class="required">*</span></label>
        <div class='controls'>
            <input id="GPA" type="text" name="GPA"  value="<?php echo set_value('GPA'); ?>"  />
            <?php echo form_error('GPA'); ?>
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
                <input id="graduate_program" name="graduate_program" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('graduate_program', '1'); ?> />
                MS
            </label>
            <label for="graduate_program" class="radio">
                <input id="graduate_program" name="graduate_program" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('graduate_program', '0'); ?> />
                PhD
            </label>
            <?php echo form_error('graduate_program'); ?>
        </div>
    </div>

    <div class="control-group">
        <label for="advisor" class="control-label">Advisors Name</label>
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
        <label for="gradDate" class="control-label">Graduation Date (YYYY-MM-DD) <span class="required">*</span></label>
        <div class='controls'>
            <input class="datepicker" type="text" name="gradDate"  value="<?php echo set_value('gradDate'); ?>"  />
            <?php echo form_error('gradDate'); ?>
        </div>
    </div>
    <div class="control-group">
        <label for="optScore" class="control-label">SPEAK/OPT Score</label>
        <div class='controls'>
            <input id="optScore" type="text" name="optScore" maxlength="2" value="<?php echo set_value('optScore'); ?>"  />
            <?php echo form_error('optScore'); ?>
        </div>
    </div><div class="control-group">
        <label for="optWhen" class="control-label">Date of last OPT test (YYYY-MM-DD)</label>
        <div class='controls'>
            <input class="datepicker" type="text" name="optWhen"  value="<?php echo set_value('optWhen'); ?>"  />
            <?php echo form_error('optWhen'); ?>
        </div>
    </div><div class="control-group">
        <label for="GATO" class="control-label">Participated in GATO <span class="required">*</span></label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="GATO" class="radio">
                <input id="GATO" name="GATO" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('GATO', '1'); ?> />
                Requirement Met
            </label>
            <label for="GATO" class="radio">
                <input id="GATO" name="GATO" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('GATO', '0'); ?> />
                Will Attend in Aug/Jan
            </label>
            <?php echo form_error('GATO'); ?>
        </div>
    </div>

    <div class="control-group">
        <label for="SPEAK" class="control-label">Taken SPEAK Test <span class="required">*</span></label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="SPEAK" class="radio">
                <input id="SPEAK" name="SPEAK" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('SPEAK', '1'); ?> />
                Requirement Met
            </label>
            <label for="SPEAK" class="radio">
                <input id="SPEAK" name="SPEAK" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('SPEAK', '0'); ?> />
                Not Met (Enter Date Below)
            </label>
            <?php echo form_error('SPEAK'); ?>
        </div>
    </div>

    <div class="control-group">
        <label for="SPEAKdate" class="control-label">*SPEAK Assigned Date (YYYY-MM-DD)</label>
        <div class='controls'>
            <input class="datepicker" type="text" name="SPEAKdate"  value="<?php echo set_value('SPEAKdate'); ?>"  />
            <?php echo form_error('SPEAKdate'); ?>
        </div>
    </div><div class="control-group">
        <label for="ONITA" class="control-label">ONITA requirement (international students)</label>
        <div class="controls">
            <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
            <label for="ONITA" class="radio">
                <input id="ONITA" name="ONITA" type="radio" class="" value="1" <?php echo $this->form_validation->set_radio('ONITA', '1'); ?> />
                Requirement Met
            </label>
            <label for="ONITA" class="radio">
                <input id="ONITA" name="ONITA" type="radio" class="" value="0" <?php echo $this->form_validation->set_radio('ONITA', '0'); ?> />
                Will Attend in Aug/Jan
            </label>
            <?php echo form_error('ONITA'); ?>
            <label for="ONITA_date" class="control-label">*ONITA Assigned Date</label>
            <div class='controls'>
                <input class="datepicker" type="text" name="ONITA_date"  value="<?php echo set_value('ONITA_date'); ?>"  />
                <?php echo form_error('ONITA_date'); ?>
            </div>
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