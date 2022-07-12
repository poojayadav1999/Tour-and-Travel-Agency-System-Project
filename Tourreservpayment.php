<!DOCTYPE html>
<html>
    <head>
        <title>Tour Reserv Payment</title>
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


if(isset($_POST['Pay']))
{
     $Id = mysqli_real_escape_string($con, $_POST['Id']);
     $Amount = mysqli_real_escape_string($con, $_POST['Amount']);
     $Name = mysqli_real_escape_string($con, $_POST['Name']);
     $Card = mysqli_real_escape_string($con, $_POST['Card']);
     $Cardno = mysqli_real_escape_string($con, $_POST['Cardno']);
     $Idno = mysqli_real_escape_string($con, $_POST['Idno']);
     $Expdate = mysqli_real_escape_string($con, $_POST['Expdate']);
    

    $insertquery =  "insert into tourreservpayment(Id,Amount,Name,Card,Cardno,Idno,Expdate) values ('$Id','$Amount','$Name','$Card',' $Cardno','$Idno',' $Expdate')";
    $iquery = mysqli_query($con,$insertquery);

    if($iquery)
    {
      ?>
      <script>
          alert('Payment Successful');
          </script>
        <?php
        
    }
    else{
      ?>
      <script>
        alert('Failed');
      </script>
       <?php
    }
}
?>
<table border="2" >
  <tr>
      <th>Id</th>
      <th>Amount</th>
      <th>Name</th>
      <th>Select Card</th>
      <th>Card no</th>
      <th>Id no.</th>
      <th>Expire Date</th>
      </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from tourreservpayment";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
  
  
  if($total!=0)
  {
    
    while($result=mysqli_fetch_assoc($data))
     {
       echo "
       <tr>
       <td>".$result['Id']."</td>
       <td>".$result['Amount']."</td>
       <td>".$result['Name']."</td>
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



  