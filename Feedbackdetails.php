<!DOCTYPE html>
<html>
    <head>
        <title>Feedback Details</title>
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
   
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Phoneno = mysqli_real_escape_string($con, $_POST['Phoneno']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Feedback = mysqli_real_escape_string($con, $_POST['Feedback']);
   

    $insertquery =  "insert into feedbackdetails(Name,Phoneno,Email,Feedback) values ('$Name',' $Phoneno','$Email',' $Feedback')";
    $iquery = mysqli_query($con,$insertquery);
    

    if($iquery)
    {
      ?>
      <script>
          alert('Saved');
          </script>
        <?php
        
    }
    else{
      ?>
      <script>
        alert('No Saved');
      </script>
       <?php
    }
}
?>



  <table border="2">
    <tr>
      <th>Name</th>
      <th>Phoneno</th>
      <th>Email</th>
      <th>Feedback</th>
    </tr>
                 
<?php

  include("dbcon.php");
  $query = "select * from feedbackdetails";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
  
  
  if($total!=0)
  {
    
    while($result=mysqli_fetch_assoc($data))
     {
       echo "
       <tr>
      
       <td>".$result['Name']."</td>
       <td>".$result['Phoneno']."</td>
       <td>".$result['Email']."</td>
       <td>".$result['Feedback']."</td>
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


