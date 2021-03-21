<?php

//getting values from hmtl page
$fname=$_POST['Firstname'];
$lname=$_POST['Lastname'];
$email=$_POST['Email'];
$dob=$_POST['Dob'];
$gender = $_POST['Gender'];
$mob = $_POST['Mobilenumber'];
$event = $_POST['event'];


/*displaying the username and password
echo $username;
echo $password;*/
$message = "Something Went wrong";
$con = mysqli_connect('localhost','root','');//connecting to dbserver
mysqli_select_db($con,'kalam2020');//selecting the database


if($con->connect_error)//checking the connection
    {
        die('PROBLEM IN CONNECTING DATABASE : '.$con->connect_error); 
    }
else 
    {
    $un = "INSERT INTO eventparticipants (fname,lname,mail,dob,gender,mob,events) VALUES ('$fname','$lname','$email','$dob','$gender','$mob','$event')";
    //$fn = "SELECT * FROM eventparticipants WHERE BINARY mob = '$mob' and BINARY events = '$event'";
    //$result = mysqli_query($con,$fn);
    //$num = mysqli_num_rows($result);
    if(mysqli_query($con,$un)){
        $message = "Registered succesfullr";
    }
    else {
        $message = "Registration unsuccessfull";
    }
    }
   echo "<script type ='text/javascript'>alert('$message');</script>";
   //header('location:home.html');
?>