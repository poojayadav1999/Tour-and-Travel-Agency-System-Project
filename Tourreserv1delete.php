<?php
include 'dbcon.php';

$id = $_GET['id'];
$query = "Delete from tourreserv1 where id= '$id' ";

$data = mysqli_query($con,$query);

if($data){

     echo "Record Deleted from database";
}
else
{
    echo "failed to delete record from database"; 
}
?>