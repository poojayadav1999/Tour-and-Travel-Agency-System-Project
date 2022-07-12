<!DOCTYPE html>
<html>
    <head>
        <title>Cruise Registration</title>
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


if(isset($_POST['Submit']))
{
    $Dtcruise = mysqli_real_escape_string($con, $_POST['Dtcruise']);
    $Participants = mysqli_real_escape_string($con, $_POST['Participants']);
    $Frequest = mysqli_real_escape_string($con, $_POST['Frequest']);
    $Amount = mysqli_real_escape_string($con, $_POST['Amount']);
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Phoneno = mysqli_real_escape_string($con, $_POST['Phoneno']);
    $Srequest = mysqli_real_escape_string($con, $_POST['Srequest']);


    $insertquery =  "insert into cruiseregistration(Dtcruise,Participants,Frequest,Amount,Id,Name,Phoneno,Srequest) values (' $Dtcruise ','$Participants','$Frequest','$Amount','$Id',' $Name',' $Phoneno',' $Srequest ')";
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
      <th>Date of Cruise</th>
      <th>No.of Participants</th>
      <th>Food Request</th>
      <th>Amount</th>
      <th>Id</th>
      <th>Name</th>
      <th>Phoneno</th>
      <th>Additional Request</th>
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from cruiseregistration";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
  
  
  if($total!=0)
  {
    
    while($result=mysqli_fetch_assoc($data))
     {
       echo "
       <tr>
       <td>".$result['Dtcruise']."</td>
       <td>".$result['Participants']."</td>
       <td>".$result['Frequest']."</td>
       <td>".$result['Amount']."</td>
       <td>".$result['Id']."</td>
       <td>".$result['Name']."</td>
       <td>".$result['Phoneno']."</td>
       <td>".$result['Srequest']."</td>
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


