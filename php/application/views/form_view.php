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
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.min.css.css"/>
</head>

<style>

    input {
        max-width: 75%;
    }
</style>

<body>
<center>
<h1>Computer Science Department<br/></h1>
<h2>Graduate Teaching Assistant Application<br/></h2>
</center>

<div class="container">
    <div class="span5">
<form style="width=45%; padding-left:55px;">

<fieldset><legend>Apply Here</legend>
    <?php
    $attributes = array('class' => 'form-horizontal', 'id' => '');
    echo form_open('Form_controller', $attributes); ?>

    <div class="form-group">
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
            <input id="GPA" type="text" name="GPA" class="form-control"  value="<?php echo set_value('GPA'); ?>"  />
            <?php echo form_error('GPA'); ?>
    </div>
    <div class="form-group">
        <label for="program_level">If undergraduate, indicate program and level (ex. CS BA jr.)</label>
            <input id="program_level" class="form-control" type="text" name="program_level" maxlength="15" value="<?php echo set_value('program_level'); ?>"  />
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
        <label for="advisor" class="control-label">Advisors Name</label>
            <input id="advisor" class="form-control" type="text" name="advisor" maxlength="30" value="<?php echo set_value('advisor'); ?>"  />
            <?php echo form_error('advisor'); ?>
    </div>

    <div class="form-group">
        <label for="phone" class="control-label">Phone Number (no spaces) <span class="required">*</span></label>
            <input id="phone" class="form-control" type="text" name="phone" maxlength="11" value="<?php echo set_value('phone'); ?>"  />
            <?php echo form_error('phone'); ?>
    </div>
    <div class="form-group">
        <label for="email" class="control-label">Email</label>

            <input id="email" class="form-control" type="text" name="email" maxlength="30" value="<?php echo set_value('email'); ?>"  />
            <?php echo form_error('email'); ?>

    </div>
    <div class="form-group">
        <label for="gradDate" class="control-label">Graduation Date (YYYY-MM-DD) <span class="required">*</span></label>
            <input class="datepicker form-control"  type="text" name="gradDate"  value="<?php echo set_value('gradDate'); ?>"  />

            <?php echo form_error('gradDate'); ?>
    </div>
    <div class="form-group">
        <label for="optScore" class="control-label">SPEAK/OPT Score</label>
            <input id="optScore" class="form-control" type="text" name="optScore" maxlength="2" value="<?php echo set_value('optScore'); ?>"  />

            <?php echo form_error('optScore'); ?>

    </div>
    <div class="form-group">
        <label for="optWhen" class="control-label">Date of last OPT test (YYYY-MM-DD)</label>
            <input class="datepicker form-control" type="text" name="optWhen"  value="<?php echo set_value('optWhen'); ?>"  />
            <?php echo form_error('optWhen'); ?>
    </div>
    <div class="form-inline">
        <label for="GATO">Participated in GATO <span class="required">*</span></label>
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
    </div>

    <div class="form-inline">
        <label for="SPEAK">Taken SPEAK Test <span class="required">*</span></label>

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
        <label for="SPEAKdate" class="control-label">*SPEAK Assigned Date (YYYY-MM-DD)</label>

            <input class="datepicker form-control" type="text" name="SPEAKdate"  value="<?php echo set_value('SPEAKdate'); ?>"  />
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

                <input class="datepicker form-control" type="text" name="ONITA_date"  value="<?php echo set_value('ONITA_date'); ?>"  />
                <?php echo form_error('ONITA_date'); ?>

        </div>




    <div class="form-group">
        <label></label>
        <hr/>

          <?php echo form_submit( 'submit', 'Submit'); ?>

    </div>
    <?php echo form_close(); ?>
    </fieldset>
    </form>
</div>
</div>

</body>