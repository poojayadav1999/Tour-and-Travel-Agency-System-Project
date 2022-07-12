<!DOCTYPE html>
<html>
    <head>
        <title>Customer Info</title>
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
    $Clientname = mysqli_real_escape_string($con, $_POST['Clientname']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $Idproof = mysqli_real_escape_string($con, $_POST['Idproof']);
    $VacationBudget = mysqli_real_escape_string($con, $_POST['Budget']);
    $Adults = mysqli_real_escape_string($con, $_POST['Adults']);
    $Childrens = mysqli_real_escape_string($con, $_POST['Childrens']);
    $DestinationofInterest = mysqli_real_escape_string($con, $_POST['Destination']);


    $insertquery =  "insert into Customerinfo(Id,Name,Address,Idproof,Vacationbudget,Adults,Childrens,Destinationinter) values ('$Id','$Clientname','$Address','$Idproof','$VacationBudget','$Adults','$Childrens','$DestinationofInterest')";
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
      <th>Name</th>
      <th>Address</th>
      <th>Idproof</th>
      <th>Vacation Budget</th>
      <th>No.of Adults</th>
      <th>No.of Childrens</th>
      <th>Destination of Intersert</th>
      <th colspan="2" text-align="center">Operation</th>
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from customerinfo";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
  
  
  if($total!=0)
  {
    
    while($result=mysqli_fetch_assoc($data))
     {
       echo "
       <tr>
       <td>".$result['id']."</td>
       <td>".$result['Name']."</td>
       <td>".$result['Address']."</td>
       <td>".$result['Idproof']."</td>
       <td>".$result['Vacationbudget']."</td>
       <td>".$result['Adults']."</td>
       <td>".$result['Childrens']."</td>
       <td>".$result['Destinationinter']."</td>

       <td><a href='Customerupdate.php?id=$result[id]&Clientname=$result[Name]&Address=$result[Address] 
       &Idproof=$result[Idproof]&VacationBudget=$result[Vacationbudget]&Adults=$result[Adults]&Childrens=$result[Childrens]
       &DestinationofInterest=$result[Destinationinter]'>Update</a></td>

       <td><a href='Customerdelete.php?id=$result[id]'>Delete</a></td>
       
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


