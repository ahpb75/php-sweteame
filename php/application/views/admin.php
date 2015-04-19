<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../bootstrap/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Team E | Applicant Manager</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href=<?php echo site_url("welcome/home");?>>Home</a>
                    </li>
                    <li>
                        <a href=<?php echo site_url("welcome/logout");?>>Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <?php
		        echo '<h1>' . "Welcome, " . $this->session->userdata('user_name') . '</h1>';
            ?>
            <p> This is where you can apply, view feedback, and know which courses you've been assigned to.</p>
            <p><a class="btn btn-primary btn-large">Begin Here</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Dashboard</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../../bootstrap/img/ta_app.png" alt="">
                    <div class="caption">
                        <h3>View Application Form</h3>
                        <p>Submit a TA/PLA application for review.</p>
                        <p>
                            <?php echo form_open("Admin_controller/view_form1");?>
                            <input class="btn btn-primary btn-large" type="submit" name="view" value="View" />
                            <?php echo form_close();?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../../bootstrap/img/create_course.png" alt="">
                    <div class="caption">
                        <h3>Create Course <br><br></h3>
                        <p>Create a course. <br><br></p>
                        <p>
                            <?php echo form_open("Admin_controller/create_course");?>
                            <input class="btn btn-primary btn-large" type="submit" name="view" value="Create" />
                            <?php echo form_close();?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../../bootstrap/img/assign_score.png" alt="">
                    <div class="caption">
                        <h3>Assign TA/PLA or Enter Score</h3>
                        <p>Assign them here <br><br></p>
                        <p>
                            <?php echo form_open("Admin_controller/assign_ta");?>
                            <input class="btn btn-primary btn-large" type="submit" name="view" value="Assign" />
                            <?php echo form_close();?>                       
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team E | TA Web Application 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../../bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
