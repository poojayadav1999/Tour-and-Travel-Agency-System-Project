<!DOCTYPE html>
<html>
    <head>
        <title>Customer info Update</title>
        <style>
          legend{
               background-color:black;
               width:340px;
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
    <div id="modaleight" class="modal">
                    <div class="modal-content">
                      <div class="Tour-Reservation-form">
                     
                        <form action="" method="POST">
                          <fieldset>
                         <legend><i>Customer Information Details</i></legend><br>

                          <?php
                          include 'dbcon.php';

                          $id = $_GET['id'];
                          $showquery = "select * from customerinfo where id={$id}";

                          $showdata = mysqli_query($con ,$showquery);

                          $arrdata = mysqli_fetch_array($showdata);

                          if(isset($_POST['Update'])){

                          $id = $_POST['Id'];
                          $Clientname = $_POST['Clientname'];
                          $Address = $_POST['Address'];
                          $Idproof = $_POST['Idproof'];
                          $VacationBudget = $_POST['Budget'];
                          $Adults = $_POST['Adults'];
                          $Childrens = $_POST['Childrens'];
                          $Destinationofinterest  = $_POST['Destination'];

                          $updatequery = "UPDATE customerinfo SET id='$id',Name='$Clientname',Address='$Address',Idproof='$Idproof',Vacationbudget='$VacationBudget', Adults='$Adults', Childrens='$Childrens' ,Destinationinter='$Destinationofinterest' WHERE id = '$id' ";
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
                          <label for="Id">Id :</label>
                            <input type="text" name="Id" placeholder="Enter Id" value="<?php echo $arrdata['id']; ?>"><br><br>

                            <label for="Client Name">Client Name :</label>
                            <input type="text" name="Clientname" placeholder="Enter Name" value="<?php echo $arrdata['Name']; ?>"><br><br>

                            <label for="Address">Address :</label>
                            <input type="text" name="Address" placeholder="Enter Address" value="<?php echo $arrdata['Address']; ?>"><br><br>
                            
                            <label for="Id">Id Proof :</label>
                                <select class="new" name="Idproof" value="<?php echo $arrdata['Idproof']; ?>">
                                    <option>Aadhar Card</option>
                                    <option>Pan Card</option>
                                    <option>Voting Card</option>
                                    <option>Ration Crad</option>
                                </select><br><br>

                            <label for="Vacation Budget">Vacation Budget :</label>
                            <input type="text" name="Budget" value="<?php echo $arrdata['Vacationbudget']; ?>"><br><br>

                            <label for="No. of Adults" >No. of Adults :</label>
                            <input type="text" name="Adults" placeholder="0" value="<?php echo $arrdata['Adults']; ?>"><br><br>

                            <label for="No. of Childrens" >No. of Childrens :</label>
                            <input type="text" name="Childrens" placeholder="0" value="<?php echo $arrdata['Childrens']; ?>"><br><br>

                            <label for="Destination of Interest">Destination of Interest :</label>
                            <input type="text" name="Destination" value="<?php echo $arrdata['Destinationinter']; ?>"><br><br>

                            <button type="submit" name="submit">Submit</button>
                            <button type="submit" name="Update">Update</button>
                          
                          </div>
                          </fieldset>
                          </form>
                         
                    </div>
                    </div>
                  </div>
    </body>
</html>


