<!DOCTYPE html>
<html>
    <head>
        <title>Hotel manage room</title>
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
      <th>Choose Hotel</th>
      <th>Room Type</th>
      <th>Bed</th>
      <th>Price</th>
      <th colspan="2" text-align="center">Operation</th>
      
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from hotelmanageroom";
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
       <td>".$result['Choosehotel']."</td>
       <td>".$result['Roomtype']."</td>
       <td>".$result['Bed']."</td>
       <td>".$result['Price']."</td>
       <td><a href='Hotelmanageroomupdate.php?Id=$result[Id]&Name=$result[Name]&Choosehotel=$result[Choosehotel] 
       &Roomtype=$result[Roomtype]&Bed=$result[Bed]&Price=$result[Price]'>Update</a></td>

       <td><a href='Hotelmanageroomdelete.php?Id=$result[Id]'>Delete</a></td>
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



  