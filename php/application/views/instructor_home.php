<!DOCTYPE HTML>
<html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> TA Selection </title>

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
    </style>
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
            <a class="navbar-brand" href="#">Team E | Instructor Manager</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo site_url("welcome/logout");?>">Logout</a>

                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
	<div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <?php
		        echo '<h1>' . "Welcome, " . $this->session->userdata('user_name') . '</h1>';
            ?>
            <p> This is where you can view TA applicants, post comments on former TA's, and know which TA's have been assigned to your course.</p>
            <p><a class="btn btn-primary btn-large" href= "<?php echo site_url("Instructor_controller/show_app");?>">View All Current Applicants</a>
            </p>
            <br>
            <br>
            <hr>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Instructor Dashboard</h3>
                </div>
            </div>

            <div class="row text-center">

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="http://placehold.it/800x500" alt="">
                        <div class="caption">
                            <h3>View Applicants </h3>
                            <p>Submit a TA/PLA application for review.</p>
                            <p>
                                <a href="Instructor_controller/show_app" class="btn btn-primary">View Applicants</a> <a href="#" class="btn btn-default">More Info</a>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="http://placehold.it/800x500" alt="">
                        <div class="caption">
                            <h3>Specific Applicants</h3>
                            <p>This is where you can search for an applicant</p>
                            <p>
                                <a href="#" class="btn btn-primary">View</a> <a href="#" class="btn btn-default">More Info</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="http://placehold.it/800x500" alt="">
                        <div class="caption">
                            <h3>View TA Assignments</h3>
                            <p>This is where you can view TA's assigned to your course</p>
                            <p>
                                <a href="#" class="btn btn-primary">View</a> <a href="#" class="btn btn-default">More Info</a>
                            </p>
                        </div>
                    </div>
                </div>



                <option value = "first applicant"> First Applicant </option>

                </select>



                <?php
                echo"<span> Choose an Applicant to view their Application</span> ";
                echo " <select name = 'courses'> ";
                foreach ($courses as $row){
                    foreach($row as $key => $value){
                        echo "<option value =".$value.">".$value."</option>";
                    }
                    //echo "<li>".$key." => ".$value."</li>";
                    // echo "=======================";
                    // echo "<br>";
                    // echo "<br>";
                }
                echo "</select>";
                ?>

<?php
echo"<span> Choose an Applicant to view their Application</span> ";
echo " <select name = 'course'> ";
foreach ($courses as $row){
	foreach($row as $key => $value){
            echo "<option value =".$value.">".$value."</option>";
	}
        //echo "<li>".$key." => ".$value."</li>";
       // echo "=======================";
       // echo "<br>";
       // echo "<br>";
    }
echo "</select>"; 
?>

                <!--
                <h1> Computer Science Department </h1>
                <h2> TA Selection 2015 </h2>
                <p> If you would like to view the applicants</p>
>>>>>>> 30ad8c8cebc4c56cae032e523a36e99fb43914d5

                <button onclick="location.href ='Instructor_controller/show_app';" id = "applicant_button"> View Applicant</button>

                Wanted to use JS but have to link it correctly with code ignighter
                <button id = "applicant_button" >View Applicant</button>
                <script type = "text/javascript">
                    document.getElementById("applicant_button").onclick = function(){
                        location.href = "Instructor_controller/show_app";
                    }

                use this instead.
                    form open -- just have a submit button to call back to the controller to load the function/different view. Similar to log in the login view and register view
                </script> -->


                <hr />
        </header>



 <script src="../../bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
