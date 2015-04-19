<!DOCTYPE HTML>
<html>
<head>

<html>
<head>


</head>
    <title> TA Selection </title>

<body>
<h1> Computer Science Department </h1>
<h2> Applicants </h2>

<?php
echo "hi";
foreach($data->row() as $row){
    echo $row->lname;
    echo ", ".$row->fname;

    //echo "hi";
    //echo $data; 
?>

    <br />;



    <button onclick="location.href ='Need location of function that pulls out form';" id = "view_button"> View Application</button>
    <!--Will redirect to another page with application that they can select to leave comments -->
}


</body>

</html>
