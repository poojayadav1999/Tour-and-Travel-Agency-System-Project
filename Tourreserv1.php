<!DOCTYPE html>
<html>
    <head>
        <title>Tour Reserv1</title>
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


if(isset($_POST['save']))
{
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Fullname = mysqli_real_escape_string($con, $_POST['Name']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $Phonenumber = mysqli_real_escape_string($con, $_POST['Phonenumber']);
    $Adults = mysqli_real_escape_string($con, $_POST['Adults']);
    $Childrens = mysqli_real_escape_string($con, $_POST['Childrens']);


    $insertquery =  "insert into tourreserv1 (Id,Name, Email, Address, Phoneno, Adults, Childrens) values ('$Id','$Fullname','$Email ',' $Address',' $Phonenumber ','$Adults','$Childrens')";
    $iquery = mysqli_query($con,$insertquery);

    if($iquery)
    {
      ?>
      <script>
          alert('Saved Successful');
          </script>
        <?php
        
    }
    else{
      ?>
      <script>
        alert('No Save');
      </script>
       <?php
    }
}
?>
 <table border="2" cellspacing="7">
  <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>phoneno</th>
      <th>No.of Adults</th>
      <th>No.of Childrens</th>
      <th colspan="2" text-align="center">Operation</th>
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from tourreserv1";
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
       <td><a href='Tourreserv1update.php?id=$result[Id]&Name=$result[Name]&Email=$result[Email] 
       &Address=$result[Address]&Phoneno=$result[Phoneno]&Adults=$result[Adults]&Childrens=$result[Childrens]'>Update</a></td>
       <td><a href='Tourreserv1delete.php?id=$result[Id]'>Delete</a></td>
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



