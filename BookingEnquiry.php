<!DOCTYPE html>
<html>
    <head>
        <title>Booking Enquiry</title>
    </head>
    <body>
      <style>
    table {
            width:50%;
            text-align:center;
            margin:auto;
            margin-top:150px;
                         
          }
                 table,tr,th,td{
                                 
                                 border-bottom:2px solid; 
                               }
                   th{
                        
                         width:40px;
                         height:50px;
                         background-color:brown;
                         color:white;
                         font-size:22px;
                     }
                  td{
                        height:40px;
                        font-size:20px;
                     }
                   tr:nth-child(even){
                                       background-color:aqua;
                                      }
                  .one:hover{
                             background-color:darkgray;
                             color:white;
                           } 
                  </style>  

    </body>
</html>

<?php

include 'dbcon.php';


if(isset($_POST['submit']))
{
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Fullname = mysqli_real_escape_string($con, $_POST['Fullname']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $Phonenumber = mysqli_real_escape_string($con, $_POST['Phonenumber']);
    $Adults = mysqli_real_escape_string($con, $_POST['Adults']);
    $Childrens = mysqli_real_escape_string($con, $_POST['Childrens']);


    $insertquery =  "insert into bookingenquiry(Id,name, Email, Address, Phonenum, Adults, Children) values ('$Id','$Fullname','$Email ',' $Address',' $Phonenumber ','$Adults','$Childrens')";
    $iquery = mysqli_query($con,$insertquery);

    if($iquery)
    {
      ?>
      <script>
          alert('Inserted Successful');
          </script>
        <?php
        
    }
    else{
      ?>
      <script>
        alert('No Inserted');
      </script>
       <?php
    }
}
?>



  <table border="2">
  <tr>
      <th>id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>phoneno</th>
      <th>No.of Adults</th>
      <th>No.of Children</th>
      <th>Operation</th>
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from bookingenquiry";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
  
  
  if($total!=0)
  {
    
    while($result=mysqli_fetch_assoc($data))
     {
       echo "
       <tr>
       <td>".$result['id']."</td>
       <td>".$result['name']."</td>
       <td>".$result['Email']."</td>
       <td>".$result['Address']."</td>
       <td>".$result['phonenum']."</td>
       <td>".$result['Adults']."</td>
       <td>".$result['Children']."</td>
       <td><a href='BookingDelete.php?id=$result[id]'>Delete</td>
       </tr>
          ";
     }
  }
  else
  {
    echo "No records found";
  }
?>
 </table>


