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
            <section class="login-form" role="login">

                    <?php echo form_open("Admin_controller/create_course_logic");?>
                    <center>
                        <h3>Create Course</h3>
                    <img src="../../bootstrap/img/mu_logo.png" class="img-responsive" alt="" />
                    </center>
                    <input type="text" id="username" name="CourseId" placeholder="CourseId" required class="form-control input-lg" />

                    <input type="text" class="form-control input-lg" id="password" name="Coursename" placeholder="Coursename" required="" />

                    <input type="submit" name="Create" value="Submit" class="btn btn-lg btn-primary btn-block" />

                <?php echo form_close();?>
            </section>
        </div>

        <div class="col-md-4"></div>


    </div>

</body>
</html>