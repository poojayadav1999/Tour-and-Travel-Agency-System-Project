<!DOCTYPE html>
<html>
    <head>
        <title>Car Booking</title>
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


if(isset($_POST['Book']))
{
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Code = mysqli_real_escape_string($con, $_POST['Code']);
    $Phoneno = mysqli_real_escape_string($con, $_POST['Phoneno']);
    $Depdate = mysqli_real_escape_string($con, $_POST['Depdate']);
    $Amount = mysqli_real_escape_string($con, $_POST['Amount']);


    $insertquery =  "insert into carbooking(Id,Name, Email, Code, Phoneno,Depdate, Amount) values ('$Id','$Name','$Email ','$Code','  $Phoneno ',' $Depdate',' $Amount')";
    $iquery = mysqli_query($con,$insertquery);

    if($iquery)
    {
      ?>
      <script>
          alert('Booking Successful');
          </script>
        <?php
        
    }
    else{
      ?>
      <script>
        alert('Not Booked');
      </script>
       <?php
    }
}
?>



  <table border="2">
  <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Country Code</th>
      <th>phoneno</th>
      <th>Deperature Date</th>
      <th>Amount</th>
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from carbooking";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
  
  
  if($total!=0)
  {
    
    while($result=mysqli_fetch_assoc($data))
     {
       echo "
       <tr>
       <td>".$result['Id']."</td>
       <td>".$result['Name']."</td>
       <td>".$result['Email']."</td>
       <td>".$result['Code']."</td>
       <td>".$result['Phoneno']."</td>
       <td>".$result['Depdate']."</td>
       <td>".$result['Amount']."</td>
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


