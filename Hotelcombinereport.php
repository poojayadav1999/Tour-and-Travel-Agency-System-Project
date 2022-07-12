<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Reservation combine</title>
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
      <th>Phoneno</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Idproof</th>
      <th>Days</th>
      <th>Checkin</th>
      <th>Checkout</th>
      <th>Choose Hotel</th>
      <th>Room Type</th>
      <th>Bed</th>
      <th>Price</th>
      </tr>
                 
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from hotelcheckin INNER JOIN hotelmanageroom ON hotelcheckin.Id = hotelmanageroom.Id";
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
       <td>".$result['Phoneno']."</td>
       <td>".$result['Email']."</td>
       <td>".$result['Gender']."</td>
      
       <td>".$result['Idproof']."</td>
       <td>".$result['Days']."</td>
       <td>".$result['Checkin']."</td>
       <td>".$result['Checkout']."</td>
       <td>".$result['Choosehotel']."</td>
       <td>".$result['Roomtype']."</td>
       <td>".$result['Bed']."</td>
       <td>".$result['Price']."</td>
       
       
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






  