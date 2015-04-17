<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="../../bootstrap/css/login.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Please Log In</title>
</head>
<body>
<div class="container">

    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <section class="login-form">
                <form method="post" role="login">
                    <img src="../../bootstrap/img/mu_logo.png" class="img-responsive" alt="" />
                    <center>
                        <?php if ($login == 'FALSE')
                            echo "<p> Your username or password was incorrect.</p>"?>
                        <?php echo form_open("welcome/login");?>
                    </center>
                    <input type="text" id="username" name="username" placeholder="Username" required class="form-control input-lg" value="<?php echo set_value('username');?>" />

                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" required="" value = "<?php echo set_value('password');?>"/>

                    <input type="submit" name="submit" value="submit" class="btn btn-lg btn-primary btn-block" />

                    <?php echo form_close();?>

                    <div>
                        <p>
                        <a href=<?php echo site_url("welcome/registration");?>Create account</a>
                        </p>
                    </div>
                </form>

                <div class="form-links">
                    <a href=<?php echo site_url("welcome/home");?>Home Page</a>
                </div>
            </section>
        </div>

        <div class="col-md-4"></div>


    </div>

</body>
</html>