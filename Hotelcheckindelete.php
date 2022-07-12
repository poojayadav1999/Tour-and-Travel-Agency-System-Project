<?php
include 'dbcon.php';

$Id = $_GET['Id'];
$query = "Delete from hotelcheckin where Id= '$Id' ";

$data = mysqli_query($con,$query);

if($data){

     echo "Record Deleted from database";
}
else
{
    echo "failed to delete record from database"; 
}
?>