<?php
session_start();
$con = mysqli_connect("localhost","root");

$db = mysqli_select_db($con,'tourproject');
if(isset($_POST['Login'])){


    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "select * from login where username= '".$username."' AND password= '".$password."' ";

    $query = mysqli_query($con,$sql);
    $row = mysqli_num_rows($query);
    if($row==1){

         echo"Login Successfully";
         $_SESSION['username']=$username;
         header('Location:Dashboard.php');
         exit();
    }
    else{
       
        header('Location:Loginpage.html');
        exit();
    }
}
?>