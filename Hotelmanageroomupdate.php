<!DOCTYPE html>
<html>
    <head>
        <title>Hotel manage room Update</title>
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
                         <legend><i>Hotel manage room update</i></legend><br>

                          <?php
                          include 'dbcon.php';

                          $Id = $_GET['Id'];
                          $showquery = "select * from hotelmanageroom where Id={$Id}";

                          $showdata = mysqli_query($con ,$showquery);

                          $arrdata = mysqli_fetch_array($showdata);

                          if(isset($_POST['Update'])){

                          $Id = $_POST['Id'];
                          $Name = $_POST['Name'];
                          $Choosehotel = $_POST['Choosehotel'];
                          $Roomtype = $_POST['Roomtype'];
                          $Bed = $_POST['Bed'];
                          $Price = $_POST['Price'];
                         
                          $updatequery = "UPDATE hotelmanageroom SET Id='$Id',Name='$Name',Choosehotel='$Choosehotel',Roomtype=' $Roomtype',Bed='$Bed', Price='$Price' WHERE Id = '$Id' ";
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
                        <input type="text" name="Id" placeholder="Id" class="aaa" value="<?php echo $arrdata['Id']; ?>"><br><br>

                        <label for="Name">Name</label><br>
                        <input type="text" name="Name" placeholder="Name"  value="<?php echo $arrdata['Name']; ?>"><br><br>
                    
                       <label for="Choose Hotel">Choose Hotel</label><br>
                       <select class="new" name="Choosehotel" value="<?php echo $arrdata['Choosehotel']; ?>">
                       <option>Greenland Hotel</option>
                       <option>Sangam Hotel</option>
                       <option>Gavran Hotel</option>
                       <option>Hesti-Testi Hotel</option>
                       <option>Fountain Hotel</option>
                       </select><br><br>


                       <label for="Room Type">Room Type</label><br>
                       <select class="new" name="Roomtype" value="<?php echo $arrdata['Roomtype']; ?>">
                       <option>AC</option>
                       <option>Non-AC</option>
                       </select><br><br>

                       <label for="Bed">Bed</label><br>
                       <select class="new" name="Bed" value="<?php echo $arrdata['Bed']; ?>">
                       <option>Single</option>
                       <option>Double</option>
                      <option>Triple</option>
                      </select><br><br>

                      <label for="Price">Price</label><br>
                      <input type="text" name="Price" value="<?php echo $arrdata['Price']; ?>"><br><br>

                     <button type="submit" name="Update" value="Update">Update</button>
    
                     </div>
                     </fieldset>
                     </form>
                         
                    </div>
                    </div>
                  </div>
    </body>
</html>


