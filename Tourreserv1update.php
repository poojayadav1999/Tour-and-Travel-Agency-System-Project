<!DOCTYPE html>
<html>
    <head>
        <title>Tour Reserv1 Update</title>
        <style>
          legend{
               background-color:black;
               width:280px;
               color:white;
               font-size:28px;
               
          }
          fieldset{
                background-color:skyblue;
                width:550px;
                height:500px;
          }
          input{
                height:20px;
          }
          label{
                 font-size:18px;
          }
          button{
                  height:25px;
                  width:80px;
                  text-align:center;
                  margin-left:20px;
          }
        </style>
    </head>
    <body>
    <div id="modalnine" class="modal">
                    <div class="modal-content">
                      <div class="Tour-Reservation-form">
                        <form action="" method="POST">
                        <fieldset>    
                          <legend>Tour Reservation 1</legend> 
                          <h4><u>Your Personal Information</u></h4>
                          
                          <?php
                          include 'dbcon.php';

                          $id = $_GET['id'];
                          $showquery = "select * from tourreserv1 where id={$id}";

                          $showdata = mysqli_query($con ,$showquery);

                          $arrdata = mysqli_fetch_array($showdata);

                          if(isset($_POST['Update'])){

                          $id = $_POST['Id'];
                          $Name = $_POST['Name'];
                          $Email = $_POST['Email'];
                          $Address = $_POST['Address'];
                          $Phoneno = $_POST['Phoneno'];
                          $Adults = $_POST['Adults'];
                          $Childrens = $_POST['Childrens'];
                          

                          $updatequery = "UPDATE tourreserv1 SET id='$id',Name='$Name',Email=' $Email', Address='$Address',Phoneno='$Phoneno',Adults='$Adults', Childrens='$Childrens'  WHERE id = '$id' ";
                          $iquery = mysqli_query($con,$updatequery);

                          if($iquery)
                         {
                            ?>
                                <script>
                                 alert('Updated Successful');
                                </script>
                            <?php
        
                         }
                           else{
                           ?>
                                <script>
                                 alert('Failed to Updated record');
                                </script>
                            <?php
                         } 

                        }
                         ?>

                              <div>
                                <input type="text" name="Id" class="aaa" placeholder="Enter Id" value="<?php echo $arrdata['Id']; ?>"><br><br>
                                
                                <input class="Full name aaa" type="text" name="Name" value="<?php echo $arrdata['Name']; ?>"><br><br>
                                <input class="Email aaa" type="text" name="Email" placeholder="Email" value="<?php echo $arrdata['Email']; ?>"><br><br>

                                <input class="Address aaa" type="text" name="Address" placeholder="Address" value="<?php echo $arrdata['Address']; ?>"><br><br>
                                <input class="phonenum aaa" type="text" name="Phoneno" placeholder="Phone number" value="<?php echo $arrdata['Phoneno']; ?>"><br><br>
                                
                                <input type="text" name="Adults" placeholder="No.of Adults" class="aaa" value="<?php echo $arrdata['Adults']; ?>"><br><br>
                                <input type="text" name="Childrens" placeholder="No.of Childrens" class="aaa" value="<?php echo $arrdata['Childrens']; ?>"><br><br>
                              
                                <button type="submit" name="Update">Update</button>  
                                </div>
                          </fieldset>   
                            </form>
                          </div>
                          </div>
                        </div>
    </body>
</html>


