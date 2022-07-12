<!DOCTYPE html>
<html>
    <head>
        <title>Tour Reservation Update</title>
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
    <div id="modalnine" class="modal">
                    <div class="modal-content">
                      <div class="Tour-Reservation-form">
                        <form action="" method="POST">
                          <h2>Tour Reservation</h2> 
                              
                          <?php
                          include 'dbcon.php';

                          $id = $_GET['id'];
                          $showquery = "select * from tourreserv1 INNER JOIN tourreserv2 ON tourreserv1.Id = tourreserv2.Id";

                          $showdata = mysqli_query($con ,$showquery);

                          $arrdata = mysqli_fetch_array($showdata);

                          if(isset($_POST['update'])){

                          $id = $_POST['Id'];
                          $Name  = $_POST['Name'];
                          $Email = $_POST['Email'];
                          $Address = $_POST['Address'];
                          $Phoneno = $_POST['Phoneno'];
                          $Adults  = $_POST['Adults'];
                          $Childrens = $_POST['Childrens'];
                          $Tourcode = $_POST['Tourcode'];
                          $Startdate= $_POST['Startdate'];
                          $Enddate  = $_POST['Enddate'];
                          $Seattype = $_POST['Seattype'];
                          $Destination= $_POST['Destination'];
                          $Amount = $_POST['Amount'];



                          $updatequery = "UPDATE tourreserv1 INNER JOIN tourreserv2 SET Id='$id', Name='$Name', Email='$Email', Address='$Address',Phoneno='$Phoneno', Adults='$Adults', Childrens='$Childrens' ,Tourcode='$Tourcode',Sdate='$Startdate',Edate='$Enddate',Seattype='$Seattype',Destination='$Destination',Amount='$Amount' ON tourreserv1.Id = tourreserv2.id  ";
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
                                <label for="Id">Id</label>
                                <input type="text" name="Id" class="aaa" placeholder="Enter Id" value="<?php echo $arrdata['Id']; ?>"><br><br>
                                  
                                <label for="Name">Name</label>
                                <input class="Name" type="text" name="Name" value="<?php echo $arrdata['Name']; ?>"><br><br>

                                <label for="Email">Email</label>
                                <input class="Email" type="text" name="Email" placeholder="Email" value="<?php echo $arrdata['Email']; ?>" ><br><br>

                                <label for="Address">Address</label>
                                <input class="Address aaa" type="text" name="Address" placeholder="Address" value="<?php echo $arrdata['Address']; ?>"><br><br>

                                <label for="Phoneno">Phoneno</label>
                                <input class="phonenum aaa" type="text" name="Phoneno" placeholder="Phone number" value="<?php echo $arrdata['Phoneno']; ?>" ><br><br>
                                
                                <label for="Adults">Adults</label>
                                <input type="text" name="Adults" placeholder="No.of Adults" class="aaa" value="<?php echo $arrdata['Adults']; ?>"><br><br>

                                <label for="Childrens">Childrens</label>
                                <input type="text" name="Childrens" placeholder="No.of Childrens" class="aaa" value="<?php echo $arrdata['Childrens']; ?>"><br><br>
                               
                                <label for="Tour Code">Tour Code</label>
                                <select class="new" name="Tourcode" value="Turcode" value="<?php echo $arrdata['Tourcode']; ?>">
                                    <option>B-T-01</option>
                                    <option>B-T-02</option>
                                    <option>E-T-01</option>
                                    <option>E-T-02</option>
                                    <option>D-T-01</option>
                                    <option>D-T-02</option>  
                                </select><br><br>

                                <label for="Start Date">Start Date</label>
                                <input type="date" name="Startdate" class="ddd" value="<?php echo $arrdata['Sdate']; ?>"><br><br>

                                <label for="End Date">End Date</label>
                                <input type="date" name="Enddate" class="ddd" value="<?php echo $arrdata['Edate']; ?>"><br><br>

                                <label for="Seat Type" >Seat Type</label>
                                <select class="new" name="Seattype" value="Seattype" value="<?php echo $arrdata['Seattype']; ?>">
                                    <option>Sitting</option>
                                    <option>Sleeper</option>  
                                </select><br><br>

                                <label for="Choose Destination">Choose Destination</label>
                                <select class="new" name="Destination" value="Destination" value="<?php echo $arrdata['Destination']; ?>">
                                    <option>Maldives</option>
                                    <option>Calangute</option>
                                    <option>Kochi</option>
                                    <option>Chennai</option>
                                    <option>Kolkata</option>
                                </select><br><br>
                                
                                <label for="Amount">Total Amount</label>
                                <input type="text" name="Amount" placeholder="Enter Amount" value="<?php echo $arrdata['Amount']; ?>"><br><br>
                                
                                <button type="submit" name="update">Update</button>  
                     
                            </div>
                            </form>
                            </div>
                            </div>
                            </div>
    </body>
</html>


