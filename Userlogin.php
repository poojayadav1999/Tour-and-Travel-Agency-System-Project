<?php

include 'dbcon.php';

session_start();

if(isset($_POST['submit']))

{
    $username = mysqli_real_escape_string($con, $_POST['username']);
   
    $password = mysqli_real_escape_string($con, $_POST['password']);
  

    $sql = "select * from userregister where username= '$username' && password= '$password' ";

    $query = mysqli_query($con,$sql);
    $row = mysqli_num_rows($query);
    if($row==1){
           header('location:NewTourBookingsystem.html');
    }
    else{
        header('location:Userlogin.html');
    }
}
?>

