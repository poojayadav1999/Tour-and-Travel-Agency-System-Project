<!DOCTYPE html>
<html>
    <head>
        <title>Tour Reservation combine</title>
    </head>
    <body>
      <style>
    table{
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


  <table border="2">
  <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>phoneno</th>
      <th>No.of Adults</th>
      <th>No.of Childrens</th>
      <th>Tour Code</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Seat Type</th>
      <th>Choose Destination</th>
      <th>Total Amount</th>
      </tr>
                 
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from tourreserv1 INNER JOIN tourreserv2 ON tourreserv1.Id = tourreserv2.Id";
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
       <td>".$result['Address']."</td>
       <td>".$result['Phoneno']."</td>
       <td>".$result['Adults']."</td>
       <td>".$result['Childrens']."</td>
       <td>".$result['Tourcode']."</td>
       <td>".$result['Sdate']."</td>
       <td>".$result['Edate']."</td>
       <td>".$result['Seattype']."</td>
       <td>".$result['Destination']."</td>
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






  