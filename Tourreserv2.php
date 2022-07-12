<!DOCTYPE html>
<html>
    <head>
        <title>Tour Reservation 2</title>
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
    $Tourcode = mysqli_real_escape_string($con, $_POST['Tourcode']);
    $Startdate = mysqli_real_escape_string($con, $_POST['Startdate']);
    $Enddate = mysqli_real_escape_string($con, $_POST['Enddate']);
    $Seattype = mysqli_real_escape_string($con, $_POST['Seattype']);
    $Destination = mysqli_real_escape_string($con, $_POST['Destination']);
    $Amount = mysqli_real_escape_string($con, $_POST['Amount']);


    $insertquery =  "insert into tourreserv2 (Id,Tourcode,Sdate,Edate,Seattype,Destination,Amount) values ('$Id',' $Tourcode',' $Startdate','$Enddate',' $Seattype', '$Destination','$Amount')";
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

<table border="2" cellspacing="7">
  <tr>
      <th>Id</th>
      <th>Tour code</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Seat Type</th>
      <th>Destination</th>
      <th>Amount</th>
      <th colspan="2" text-align="center">Operation</th>
  </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from tourreserv2";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
  
  
  if($total!=0)
  {
    
    while($result=mysqli_fetch_assoc($data))
     {
       echo "
       <tr>
       <td>".$result['Id']."</td>
       <td>".$result['Tourcode']."</td>
       <td>".$result['Sdate']."</td>
       <td>".$result['Edate']."</td>
       <td>".$result['Seattype']."</td>
       <td>".$result['Destination']."</td>
       <td>".$result['Amount']."</td>
       <td><a href='Tourreserv2update.php?id=$result[Id]&Tourcode=$result[Tourcode]&Sdate=$result[Sdate] 
       &Edate=$result[Edate]&Seattype=$result[Seattype]&Destination=$result[Destination]&Amount=$result[Amount]'>Update</a></td>
       <td><a href='Tourreserv2delete.php?id=$result[Id]'>Delete</a></td>
       
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


