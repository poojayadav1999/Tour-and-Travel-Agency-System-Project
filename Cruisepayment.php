<!DOCTYPE html>
<html>
    <head>
        <title>Cruise Reserv Payment</title>
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
<table border="2">
  <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Amount</th>
      <th>Select Card</th>
      <th>Card no</th>
      <th>Id no.</th>
      <th>Expire Date</th>
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from cruisepayment";
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
       <td>".$result['Amount']."</td>
       <td>".$result['Card']."</td>
       <td>".$result['Cardno']."</td>
       <td>".$result['Idno']."</td>
       <td>".$result['Expdate']."</td>
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

