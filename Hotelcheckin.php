<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Checkin</title>
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


if(isset($_POST['Alloteroom']))
{
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Phoneno = mysqli_real_escape_string($con, $_POST['Phoneno']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
    $Idproof = mysqli_real_escape_string($con, $_POST['Idproof']);
    $Days = mysqli_real_escape_string($con, $_POST['Days']);
    $Checkin = mysqli_real_escape_string($con, $_POST['Checkin']);
    $Checkout = mysqli_real_escape_string($con, $_POST['Checkout']);


    $insertquery =  "insert into hotelcheckin(Id,Name,Phoneno,Email,Gender,Idproof,Days,Checkin,Checkout) values ('$Id','$Name',' $Phoneno',' $Email',' $Gender','  $Idproof','$Days','$Checkin',' $Checkout')";
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
      <th>Phoneno</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Idproof</th>
      <th>Days</th>
      <th>Checkin</th>
      <th>Checkout</th>
      <th colspan="2" text-align="center">Operation</th>
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from hotelcheckin";
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

       <td><a href='Hotelcheckinupdate.php?Id=$result[Id]&Name=$result[Name]&Phoneno=$result[Phoneno] 
       &Email=$result[Email]&Gender=$result[Gender]&Idproof=$result[Idproof]&Days=$result[Days]
       &Checkin=$result[Checkin] &Checkout=$result[Checkout]' id='updatebtn'>Update</a></td>

       <td><a href='Hotelcheckindelete.php?Id=$result[Id]'>Delete</a></td>
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


