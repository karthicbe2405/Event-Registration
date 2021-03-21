    <?php

    //getting values from hmtl page
    $username=$_POST['Username'];
    $password=$_POST['Password'];


    /*displaying the username and password
    echo $username;
    echo $password;*/
    $message = "Something Went wrong".$username;

    $con = mysqli_connect('localhost','root','');//connecting to dbserver
    mysqli_select_db($con,'kalam2020');//selecting the database


    if($con->connect_error)//checking the connection
        {
            die('PROBLEM IN CONNECTING DATABASE : '.$con->connect_error); 
        }
    else 
        {
        /*echo 'Db connected succesfully';
        $result = mysqli_query("SELECT * FROM login WHERE username = '$username' and password='$password'") or die("Failed to queery databse".mysqli_error());*/ 
        
        $un = "SELECT * FROM login WHERE BINARY username = '$username' and BINARY password = '$password'";
        $result = mysqli_query($con,$un);
        $num = mysqli_num_rows($result);
        if($num==1){
            header('location:participants.php'); 
            $message = "Log in Successfull";
        }
        else {
            $message = "Invalid Username or Password";
            //header('location:login.html');
        }
        }
       echo "<script type ='text/javascript'>alert('$message');</script>";  
?>