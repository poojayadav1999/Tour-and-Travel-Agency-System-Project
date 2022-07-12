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
    <div id="modalthree" class="modal">
                          <div class="modal-content">
                         <div class="Tour-Reservation-form">
                          <form action="" method="POST">
                          <fieldset>    
                          <legend>Tour Reservation 2</legend> 
                             
                          <?php
                          include 'dbcon.php';

                          $id = $_GET['id'];
                          $showquery = "select * from tourreserv2 where id={$id}";

                          $showdata = mysqli_query($con ,$showquery);

                          $arrdata = mysqli_fetch_array($showdata);

                          if(isset($_POST['Update'])){

                          $id = $_POST['Id'];
                          $Tourcode = $_POST['Tourcode'];
                          $Sdate = $_POST['Startdate'];
                          $Edate = $_POST['Enddate'];
                          $Seattype = $_POST['Seattype'];
                          $Destination = $_POST['Destination'];
                          $Amount = $_POST['Amount'];
                          

                          $updatequery = "UPDATE tourreserv2 SET id='$id',Tourcode=' $Tourcode',Sdate=' $Sdate', Edate='$Edate',Seattype=' $Seattype',Destination=' $Destination', Amount='$Amount'  WHERE id = '$id' ";
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

                                <label for="Id">Id</label>
                                <input type="text" name="Id" class="ddd" value="<?php echo $arrdata['Id']; ?>"><br><br>

                                <label for="Tour Code">Tour Code</label><br>
                                <select class="new" name="Tourcode" value="Turcode" value="<?php echo $arrdata['Tourcode']; ?>" >
                                    <option>B-T-01</option>
                                    <option>B-T-02</option>
                                    <option>E-T-01</option>
                                    <option>E-T-02</option>
                                    <option>D-T-01</option>
                                    <option>D-T-02</option>  
                                </select><br><br>

                                <label for="Start Date">Start Date</label>
                                <input type="date" name="Startdate" class="ddd" value="<?php echo $arrdata['Sdate']; ?>" ><br><br>

                                <label for="End Date">End Date</label>&nbsp;
                                <input type="date" name="Enddate" class="ddd" value="<?php echo $arrdata['Edate']; ?>" ><br><br>

                                <label for="Seat Type" >Seat Type</label><br>
                                <select class="new" name="Seattype" value="Seattype" value="<?php echo $arrdata['Seattype']; ?>" >
                                    <option>Sitting</option>
                                    <option>Sleeper</option>  
                                </select><br><br>

                                <label for="Choose Destination">Choose Destination</label><br>
                                <select class="new" name="Destination" value="Destination" value="<?php echo $arrdata['Destination']; ?>" >
                                    <option>Maldives</option>
                                    <option>Calangute</option>
                                    <option>Kochi</option>
                                    <option>Chennai</option>
                                    <option>Kolkata</option>
                                </select><br><br>
                                
                                <label for="Amount">Total Amount</label><br>
                                <input type="text" name="Amount" placeholder="Enter Amount" value="<?php echo $arrdata['Amount']; ?>" ><br><br>
                                
                                <button type="submit" name="Update">Update</button>  
                              </div>
                              </fieldset>    
                            </form>
                          </div>
                          </div>
                        </div>    
    </body>
</html>
