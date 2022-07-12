<?php

include 'dbcon.php';

if(isset($_POST['submit']))

{
    $username = mysqli_real_escape_string($con, $_POST['username']);
   
    $password = mysqli_real_escape_string($con, $_POST['password']);
  

    $sql = "select * from userregister where username= '$username' ";

    $query = mysqli_query($con,$sql);
    $row = mysqli_num_rows($query);
    if($row==1){

         echo"Username Allready Taken";
        
    }
    else{
        $sql = "insert into userregister (username , password) values ('$username' , '$password') ";
        $query = mysqli_query($con,$sql);
        echo"Registration Successful";
       
    }
}
?>

