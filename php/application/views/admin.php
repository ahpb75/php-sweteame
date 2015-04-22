<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../../favicon.ico" />
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
    <style>
        body {
            background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .anno
        {
            width:450px;
            height: 34px;

        }
    </style>
</head>

<body>

    <!-- Navigation -->


    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <?php
		        echo '<h1>' . "Welcome, " . $this->session->userdata('user_name');
            ?>
            <iframe src="http://free.timeanddate.com/countdown/i4n12d6i/cf101/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cac000/cpc000/pcd8873c/tc66c/fs100/szw320/szh135/tatTime%20left%20to%20Assign%20TA/tac000/tptTime%20since%20Event%20started%20in/tpc000/mac000/mpc000/iso2015-05-10T00:00:00" allowTransparency="true" frameborder="0" width="260" height="135"></iframe>
            </h1>
            <div class = "container-fluid">
            <?php
            echo form_open('Admin_controller/announcement');
            $data = array(
                'name' => 'announcement',
                'class' => 'form_control anno',
                'placeholder' => 'Make an announcement here',
                );
            echo form_input($data);
            $data2 = array(
                'name' => 'Post',
                'value' => 'Post',
                'class' => 'btn btn-primary',
                );
            echo form_submit($data2);
            echo form_close();
            ?>
        </div>
            <br>
            <br>
            <hr>

            <!-- Title -->
            <div class="row">
                <div class="col-lg-16">
                    <h3>Dashboard</h3>
                </div>
            </div>
            <!-- /.row -->

            <!-- Page Features -->
            <div class="row text-center">

                <div class="col-md-4 col-sm-6 hero-feature">
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
                <div class="col-md-4 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="../../bootstrap/img/create_course.png" height = "400" width = "310" alt="">
                        <div class="caption">
                            <br>
                            <br>
                            <br>
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

                <div class="col-md-4 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="../../bootstrap/img/assign_score.png" height = "400" width = "310" alt="">
                        <div class="caption">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
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
        </header>



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
