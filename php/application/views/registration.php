<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="../../bootstrap/css/login.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Registration</title>
</head>
<body>
<div class="container">

    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <section class="registration-form" role="registration">

                    <?php echo form_open("welcome/registration");?>
                    <center>
                        <h3>Registration</h3>
                    <img src="../../bootstrap/img/mu_logo.png" class="img-responsive" alt="" />
                    </center>
                    
                    <input type="text" id="username" name="username" placeholder="Username" required class="form-control input-lg" value="<?php echo set_value('username');?>" />

                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" required="" value = "<?php echo set_value('password');?>"/>

                    <input type="cpassword" class="form-control input-lg" id="cpassword" name="cpassword" placeholder="Password" required="" value = "<?php echo set_value('cpassword');?>"/>
					
					<center> 
						<?php if(confirmpassword != password)
							echo "<p> Your passwords do not match";
					
					<br>
					<input type="radio" name="permissions" value="2" checked />Applicant 
					<br>
					<input type="radio" name="permissions" value="1" />Staff 
					<br>
					<input type="submit" name="submit" value="submit" />
					<?php echo form_close();?>

                <div class="form-links">
                    <a href=<?php echo site_url("welcome/home");?>Home Page</a>
                </div>
            </section>
        </div>

        <div class="col-md-4"></div>


    </div>

</body>
</html>