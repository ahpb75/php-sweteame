<!--
/**
 * Created by PhpStorm.
 * User: chantal
 * Date: 4/12/15
 * Time: 3:18 PM
 */
-->
<!DOCTYPE HTML>
<html>
<head>
    <title> TA Selection </title>

</head>

<body>
<h1> Computer Science Department </h1>
<h2> Applicants </h2>

<?php
foreach($applicants as $data){

    echo $data->lname ?>
    '<br />';



    <button onclick="location.href ='Need location of function that pulls out form';" id = "view_button"> View Application</button>
    <!--Will redirect to another page with application that they can select to leave comments -->
}


</body>

</html>




