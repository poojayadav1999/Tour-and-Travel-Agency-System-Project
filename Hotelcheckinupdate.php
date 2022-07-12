<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Checkin Update</title>
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
                height:650px;
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
                         <legend><i>Hotel Checkin</i></legend><br>

                          <?php
                          include 'dbcon.php';

                          $Id = $_GET['Id'];
                          $showquery = "select * from hotelcheckin where Id={$Id}";

                          $showdata = mysqli_query($con ,$showquery);

                          $arrdata = mysqli_fetch_array($showdata);

                          if(isset($_POST['Update'])){

                          $Id = $_POST['Id'];
                          $Name = $_POST['Name'];
                          $Phoneno = $_POST['Phoneno'];
                          $Email = $_POST['Email'];
                          $Gender = $_POST['Gender'];
                          $Idproof = $_POST['Idproof'];
                          $Days = $_POST['Days'];
                          $Checkin  = $_POST['Checkin'];
                          $Checkout = $_POST['Checkout'];

                          $updatequery = "UPDATE hotelcheckin SET Id='$Id',Name='$Name',Phoneno='$Phoneno',Email=' $Email',Gender='$Gender', Idproof='$Idproof', Days='$Days' ,Checkin='$Checkin',Checkout='$Checkout' WHERE Id = '$Id' ";
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

                        <label for="Id">Id</label><br>
                        <input class="Id" type="text" name="Id" placeholder="Id" value="<?php echo $arrdata['Id']; ?>"><br><br>

                        <label for="Name">Name</label><br>
                        <input class="Name" type="text" name="Name" placeholder="Enter Name" value="<?php echo $arrdata['Name']; ?>"><br><br>

                        <label for="Phone number">Phone number</label><br>
                        <input type="text" name="Phoneno" placeholder="Phone number" value="<?php echo $arrdata['Phoneno']; ?>"><br><br>

                        <label for="Email">Email</label><br>
                        <input type="text" name="Email" placeholder="Email" value="<?php echo $arrdata['Email']; ?>"><br><br>

                        <label for="Gender">Gender</label><br>
                        <select class="new" name="Gender" value="<?php echo $arrdata['Gender']; ?>">
                               <option>Male</option>
                               <option>Female</option>
                        </select><br><br>

                        <label for="Id">Id Proof</label><br>
                        <select class="new" name="Idproof" value="<?php echo $arrdata['Idproof']; ?>">
                             <option>Aadhar Card</option>
                             <option>Pan Card</option>
                             <option>Voting Card</option>
                        </select><br><br>

                        <label for="No of Days Stay">No of Days Stay</label><br>
                        <input type="text" name="Days" value="<?php echo $arrdata['Days']; ?>"><br><br>

                       <label for="Check in Date">Check in Date</label><br>
                       <input type="date" name="Checkin" value="<?php echo $arrdata['Checkin']; ?>"><br><br>

                       <label for="Check out Date">Check out Date</label><br>
                       <input type="date" name="Checkout" value="<?php echo $arrdata['Checkout']; ?>"><br><br>

                       <button type="submit" name="Update">Update</button>

                      </div>
                          </fieldset>
                          </form>
                         
                    </div>
                    </div>
                  </div>
    </body>
</html>


