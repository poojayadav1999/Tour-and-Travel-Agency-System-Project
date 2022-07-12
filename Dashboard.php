<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
         <link rel="stylesheet" href="Dashboard.css">
          
    </head>
    <body>
        <div class="main">
            <header>
                <p class="one"><b>Dashboard</b></p>
            </header>
            <div class="sub">
              <div class="sidebar">
                <ul>
                <li><button class="button" data-modal="modalseven">Travel Booking Enquiry</button></li><br><br>
                <li><button class="button" data-modal="modaleight">Customer Information Details</button></li><br><br> 
                    
                <li><button class="button" data-modal="modalOne">Tour Details</button> 
                <ul> 
                  <li><button class="button" data-modal="modalnine">Tour<br>Reserv1</button></li> 
                  <li><button class="button" data-modal="modalthree">Tour<br>Reserv2</button></li> 
                  <li><button class="button" data-modal="modalten">Payment<br>Details</button></li>  
                  </ul>     
                </li><br><br>
               
                <li><button class="button" data-modal="modaltwo">Hotel Details</button>
                  <ul>
                   
                    <li><button class="button" data-modal="modaltwelve">Customer <br>Check In</button></li>
                    <li><button class="button" data-modal="modaleleven">Manage<br>Room</button></li>    
                    <li><button class="button" data-modal="modalfourteen">Hotel Payment <br>Bills</button></li>  
                    </ul> 
                </li><br><br>

                
                <li><button class="button" data-modal="modalfour">Cruise Details</button>
                <ul>
                   
                   <li><button class="button" data-modal="modalsixteen">Cruise<br>Registration</button></li>
                   <li><button class="button" data-modal="modalseventeen">Cruise<br>Payment</button></li>   
                   </ul> 
                </li><br><br>


                <li><button class="button" data-modal="modalfive">Car Booking</button></li><br><br>
                <li><button class="button" data-modal="modalsix">Car Booking Payment</button></li><br><br>
                <li><button class="button" data-modal="modalfifteen">Feedback<br>Details</button></li><br><br>
                
                </ul>
                </div>

                <div class="menu">

                  

                  <div id="modaleight" class="modal">
                    <div class="modal-content">
                      <div class="Tour-Reservation-form">
                        <a class="close">&times;</a>
                        <form action="Customerinfo.php" method="POST">
                          <h2>Customer Information Form</h2>
                          <div>
                          <label for="Id">Id</label><br>
                            <input type="text" name="Id" placeholder="Enter Id"><br><br>

                            <label for="Client Name">Client Name</label><br>
                            <input type="text" name="Clientname" placeholder="Enter Name"><br><br>

                            <label for="Address">Address</label><br>
                            <textarea rows="2" cols="20" name="Address"></textarea> <br><br>
                            
                            <label for="Id">Id Proof</label><br>
                                <select class="new" name="Idproof">
                                    <option>Aadhar Card</option>
                                    <option>Pan Card</option>
                                    <option>Voting Card</option>
                                    <option>Ration Crad</option>
                                </select><br><br>

                            <label for="Vacation Budget">Vacation Budget</label><br>
                            <input type="text" name="Budget"><br><br>

                            <label for="No. of Adults" >No. of Adults</label><br>
                            <input type="text" name="Adults" placeholder="0"><br><br>

                            <label for="No. of Childrens" >No. of Childrens</label>
                            <input type="text" name="Childrens" placeholder="0"><br><br>

                            <label for="Destination of Interest">Destination of Interest</label><br>
                            <input type="text" name="Destination"><br><br>

                            <button type="submit" name="submit">Submit</button>
                           
                          
                          </div>
                          </form>
                    </div>
                    </div>
                  </div>


                  <div id="modalseven" class="modal">
                    <div class="modal-content">
                      <div class="Tour-Reservation-form">
                        <a class="close">&times;</a>
                        <form action="BookingEnquiry.php" method="POST">
                          <h2>Travel Booking Enquiry</h2>
                          <div>

                            <label for="Id">Booking Id</label><br>
                            <input  type="text" name="Id" placeholder="Enter Id"><br><br>
                            
                            <label for="Full name">Full name</label><br>
                            <input class="Full name" type="text" name="Fullname" placeholder="Full name"><br><br>
                            
                            <label for="Email">Email</label><br>
                            <input type="text" name="Email" placeholder="Email"><br><br>

                            <label for="Address">Address</label><br>
                            <textarea rows="2" cols="20" name="Address"></textarea> <br><br> 

                            <label for="Phone number">Phone number</label><br>
                            <input type="number" name="Phonenumber" placeholder="Phone number"><br><br>

                            <label for="No. of Adults">No. of Adults</label><br>
                            <input type="text" name="Adults" placeholder="0"><br><br>

                            <label for="No. of Childrens">No. of Childrens</label><br>
                            <input type="text" name="Childrens" placeholder="0"><br><br>


                            <button type="submit" name="submit" value="submit">Submit</button>
                            
                          </div>
                          </form>
                    </div>
                    </div>
                  </div>
                 


                 
                  <div id="modalnine" class="modal">
                    <div class="modal-content">
                      <div class="Tour-Reservation-form">
                        <a class="close">&times;</a>
                        <form action="Dashboard.php" method="POST">
                          <h2>Tour Reservation 1</h2> 
                          <h4><u>Your Personal Information</u></h4>    
                              <div>
                                <input type="text" name="Id" class="aaa" placeholder="Enter Id">&nbsp;&nbsp;&nbsp;
                                <input type="submit" value="Search" name="Search" class="aaa"><br><br>

                                <?php
                                  $con = mysqli_connect("localhost","root","","tourproject");
                                 if(isset($_POST['Search']))
                               {
                                             $id = $_POST['Id'];
                                             $query = "SELECT * from bookingenquiry WHERE id = '$id' ";
                                            $query_run = mysqli_query($con,  $query);
 
                                           if(mysqli_num_rows($query_run) > 0)
                                          {
                                     while($row = mysqli_fetch_array($query_run))
                                  {?>
                                <input class="Full name aaa" type="text" name="Name" value="<?php  echo $row['name']; ?>" readonly>&nbsp;&nbsp;&nbsp;
                                <input class="Email aaa" type="text" name="Email" placeholder="Email" value="<?php  echo $row['Email']; ?>"><br><br>

                                <input class="Address aaa" type="text" name="Address" placeholder="Address" value="<?php  echo $row['Address']; ?>">&nbsp;&nbsp;&nbsp;
                                <input class="phonenum aaa" type="text" name="Phonenumber" placeholder="Phone number" value="<?php  echo $row['phonenum']; ?>"><br><br>
                                
                                <input type="text" name="Adults" placeholder="No.of Adults" class="aaa" value="<?php  echo $row['Adults']; ?>">&nbsp;&nbsp;&nbsp;
                                <input type="text" name="Childrens" placeholder="No.of Childrens" class="aaa" value="<?php  echo $row['Children']; ?>"><br><br>
                               <?php
                              }
                             
                          }
                          else
                          {
                              echo "No Data Available"; 
                          }
                      }
                      ?>
                      <button type="submit" name="save">Save</button>  
                       </div>
                            </form>
                          </div>
                          </div>
                        </div>
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


                         <div id="modalthree" class="modal">
                          <div class="modal-content">
                         <div class="Tour-Reservation-form">
                         <a class="close">&times;</a>
                          <form action="Tourreserv2.php" method="POST">
                          <h2>Tour Reservation 2</h2>   
                               
                                <label for="Id">Id</label>
                                <input type="text" name="Id" class="ddd"><br><br>

                                <label for="Tour Code">Tour Code</label><br>
                                <select class="new" name="Tourcode" value="Turcode">
                                    <option>B-T-01</option>
                                    <option>B-T-02</option>
                                    <option>E-T-01</option>
                                    <option>E-T-02</option>
                                    <option>D-T-01</option>
                                    <option>D-T-02</option>  
                                </select><br><br>

                                <label for="Start Date">Start Date</label>
                                <input type="date" name="Startdate" class="ddd"><br><br>

                                <label for="End Date">End Date</label>&nbsp;
                                <input type="date" name="Enddate" class="ddd"><br><br>

                                <label for="Seat Type" >Seat Type</label><br>
                                <select class="new" name="Seattype" value="Seattype">
                                    <option>Sitting</option>
                                    <option>Sleeper</option>  
                                </select><br><br>

                                <label for="Choose Destination">Choose Destination</label><br>
                                <select class="new" name="Destination" value="Destination">
                                    <option>Maldives</option>
                                    <option>Calangute</option>
                                    <option>Kochi</option>
                                    <option>Chennai</option>
                                    <option>Kolkata</option>
                                </select><br><br>
                                
                                <label for="Amount">Total Amount</label><br>
                                <input type="text" name="Amount" placeholder="Enter Amount"><br><br>
                                
                                <button type="submit" name="submit">Submit</button>  
                              </div>
                            </form>
                          </div>
                          </div>
                        </div>


  
                        <div id="modalten" class="modal">
                          <div class="modal-content">
                            <div class="Tour-Reservation-form">
                              <a class="close">&times;</a>
                              <form action="" method="POST">
                                <h2>Tour Reservation Payment</h2>
                                <h4><u>Your Card Information</u></h4>
                                <div>
                                <input type="text" name="Id" placeholder="Id" class="aaa">
                                <input type="submit" name="Search" placeholder="Search" class="aaa"><br><br>

                                <?php
                                  $con = mysqli_connect("localhost","root","","tourproject");
                                 if(isset($_POST['Search']))
                               {
                                             $Id = $_POST['Id'];
                                             $query = "SELECT * from tourreserv2 WHERE Id = '$Id' ";
                                            $query_run = mysqli_query($con,  $query);
 
                                           if(mysqli_num_rows($query_run) > 0)
                                          {
                                     while($row = mysqli_fetch_array($query_run))
                                  {?>

                                <label for="Amount">Amount</label><br>
                                <input type="text" name="Amount" placeholder="Enter Amount" value="<?php  echo $row['Amount']; ?>" readonly><br><br>
                                 
                                
                               
                                <?php
                              }
                             
                          }
                          else
                          {
                              echo "No Data Available"; 
                          }
                      }
                      ?>

                                <label for="Card Holder Name">Card Holder Name</label><br>
                                <input type="text" name="Name" placeholder="Enter Holder Name"><br><br> 

                                  <label for="Select a Card">Select a Card</label><br>
                                  <select class="new" name="Card" value="Card">
                                    <option>Card 1</option>
                                    <option>Card 2</option>
                                    <option>Card 3</option>
                                    <option>Card 4</option>
                                </select><br><br>

                                <label for="Card Number">Card Number</label><br>
                                <input type="text" name="Cardno" placeholder="Card Number"><br><br>
  
                                <label for="Card Identification Number">Card Identification Number</label><br>
                                <input type="text" name="Idno" placeholder="Card Identification Number"><br><br>
  
                                 
                                <label for="Expiration Date">Expiration Date</label><br>
                                <input type="date" name="Expdate"> <br><br><br>
  
                               <button type="submit" name="Pay">Pay</button>
                                </div>
                                </form>
  
                            </div>
                          </div>
                        </div>

                        
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
    

    $insertquery =  "insert into tourreservpayment(Id,Amount,Name,Card,Cardno,Idno,Expdate) values ('$Id','$Amount','$Name','$Card','$Cardno','$Idno',' $Expdate')";
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



  
  
  
                         

                        <div id="modaltwelve" class="modal">
                          <div class="modal-content">
                            <div class="Tour-Reservation-form">
                              <a class="close">&times;</a>
                              <form action="Hotelcheckin.php" method="POST">
                                <h2>Customer Check In</h2>
                                <div>

                                  <label for="Id">Id</label><br>
                                  <input class="Id" type="text" name="Id" placeholder="Id"><br><br>

                                  <label for="Name">Name</label><br>
                                  <input class="Name" type="text" name="Name" placeholder="Enter Name"><br><br>

                                  <label for="Phone number">Phone number</label><br>
                                  <input type="text" name="Phoneno" placeholder="Phone number"><br><br>
                                  
                                  <label for="Email">Email</label><br>
                                  <input type="text" name="Email" placeholder="Email"><br><br>

                                  <label for="Gender">Gender</label><br>
                                  <select class="new" name="Gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                   </select><br><br>

                                   <label for="Id">Id Proof</label><br>
                                <select class="new" name="Idproof">
                                    <option>Aadhar Card</option>
                                    <option>Pan Card</option>
                                    <option>Voting Card</option>
                                </select><br><br>

                                  <label for="No of Days Stay">No of Days Stay</label><br>
                                  <input type="text" name="Days"><br><br>
  
                                  <label for="Check in Date">Check in Date</label><br>
                                  <input type="date" name="Checkin"><br><br>

                                  <label for="Check out Date">Check out Date</label><br>
                                  <input type="date" name="Checkout"><br><br>

                                  <button type="submit" name="Alloteroom">Allote Room</button>
                                 
                                </div>
                                </form>
                          </div>
                          </div>
                        </div>



                        <div id="modaleleven" class="modal">
                          <div class="modal-content">
                            <div class="Tour-Reservation-form">
                              <a class="close">&times;</a>
                              <form action="" method="POST">
                                <h2>Manage Room</h2>
                                <div>
  
                               
                                <input type="text" name="Id" placeholder="Id" class="aaa">
                                <input type="submit" name="Search" placeholder="Search" class="aaa"><br><br>

                                <?php
                                  $con = mysqli_connect("localhost","root","","tourproject");
                                 if(isset($_POST['Search']))
                               {
                                             $Id = $_POST['Id'];
                                             $query = "SELECT * from hotelcheckin WHERE Id = '$Id' ";
                                            $query_run = mysqli_query($con,  $query);
 
                                           if(mysqli_num_rows($query_run) > 0)
                                          {
                                     while($row = mysqli_fetch_array($query_run))
                                  {?>
                                <label for="Name">Name</label><br>
                                <input class="Name" type="text" name="Name" placeholder="Enter Name" value="<?php  echo $row['Name']; ?>" readonly><br><br>
                               
                                <?php
                                }
                             
                              }
                              else
                              {
                                echo "No Data Available"; 
                              }
                             }
                             ?>

                                <label for="Choose Hotel">Choose Hotel</label><br>
                                <select class="new" name="Choosehotel">
                                  <option>Greenland Hotel</option>
                                  <option>Sangam Hotel</option>
                                  <option>Gavran Hotel</option>
                                  <option>Hesti-Testi Hotel</option>
                                  <option>Fountain Hotel</option>
                                 </select><br><br>

  
                                  <label for="Room Type">Room Type</label><br>
                                  <select class="new" name="Roomtype">
                                    <option>AC</option>
                                    <option>Non-AC</option>
                                   </select><br><br>

                                   <label for="Bed">Bed</label><br>
                                  <select class="new" name="Bed">
                                    <option>Single</option>
                                    <option>Double</option>
                                    <option>Triple</option>
                                   </select><br><br>

                                   <label for="Price">Price</label><br>
                                  <input type="text" name="Price"><br><br>

                                  <button type="submit" name="Addroom" value="Addroom">Add Room</button>
                                  
                                </div>
                                </form>
                          </div>
                          </div>
                        </div>

                        <?php

include 'dbcon.php';


if(isset($_POST['Addroom']))
{
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Choosehotel = mysqli_real_escape_string($con, $_POST['Choosehotel']);
    $Roomtype = mysqli_real_escape_string($con, $_POST['Roomtype']);
    $Bed = mysqli_real_escape_string($con, $_POST['Bed']);
    $Price = mysqli_real_escape_string($con, $_POST['Price']);
   

    $insertquery =  "insert into hotelmanageroom (Id,Name,Choosehotel,Roomtype,Bed,Price) values ('$Id','$Name','$Choosehotel',' $Roomtype',' $Bed','$Price')";
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



                      <div id="modalfourteen" class="modal">
                        <div class="modal-content">
                          <div class="Tour-Reservation-form">
                            <a class="close">&times;</a>
                            <form action="" method="POST">
                              <h2>Hotel Payment Bill</h2>
                              <h4><u>Your Card Information</u></h4>
                              <div>

                              <input type="text" name="Id" placeholder="Id" class="aaa">
                              <input type="submit" name="Search" placeholder="Search" class="aaa" value="Search"><br><br>


                              <?php
                                  $con = mysqli_connect("localhost","root","","tourproject");
                                 if(isset($_POST['Search']))
                               {
                                             $Id = $_POST['Id'];
                                             $query = "SELECT * from hotelmanageroom WHERE Id = '$Id' ";
                                            $query_run = mysqli_query($con,  $query);
 
                                           if(mysqli_num_rows($query_run) > 0)
                                          {
                                     while($row = mysqli_fetch_array($query_run))
                                  {?>
                               
                                <label for="Card Holder Name">Card Holder Name</label><br>
                                <input type="text" name="Name" placeholder="Enter Holder Name" value="<?php  echo $row['Name']; ?>" readonly><br><br>

                                <label for="Price">Price</label><br>
                                  <input type="text" name="Price" value="<?php  echo $row['Price']; ?>" readonly><br><br> 
                                <?php
                                }
                             
                              }
                              else
                              {
                                echo "No Data Available"; 
                              }
                             }
                             ?>

                                <label for="Select a Card">Select a Card</label><br>
                                <select class="new" name="Card">
                                  <option>Card 1</option>
                                  <option>Card 2</option>
                                  <option>Card 3</option>
                                  <option>Card 4</option>
                              </select><br><br>

                              <label for="Card Number">Card Number</label><br>
                              <input type="text" name="Cardno" placeholder="Card Number"><br><br>

                              <label for="Card Identification Number">Card Identification Number</label><br>
                              <input type="text" name="Idno" placeholder="Card Identification Number"><br><br>

                               
                              <label for="Expiration Date">Expiration Date</label><br>
                              <input type="date" name="Expdate"> <br><br><br>

                             <button type="submit" name="Submit">Pay</button>
                              </div>
                              </form>

                          </div>
                        </div>
                      </div>
                      <?php

include 'dbcon.php';


if(isset($_POST['Submit']))
{
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Price = mysqli_real_escape_string($con, $_POST['Price']);
    $Card = mysqli_real_escape_string($con, $_POST['Card']);
    $Cardno = mysqli_real_escape_string($con, $_POST['Cardno']);
    $Idno = mysqli_real_escape_string($con, $_POST['Idno']);
    $Expdate = mysqli_real_escape_string($con, $_POST['Expdate']);
   

    $insertquery =  "insert into hotelpayment (Id,Name,Price,Card,Cardno,Idno,Expdate) values ('$Id','$Name','$Price',' $Card ','$Cardno ','$Idno',' $Expdate')";
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


                      
                     
                    
                      <div id="modalsixteen" class="modal">
                        <div class="modal-content">
                          <div class="Tour-Reservation-form">
                            <a class="close">&times;</a>
                            <form action="Cruiseregistration.php" method="POST">
                              <h2>Cruise Registration</h2>
                              <h4><u>Cruise Specifics</u></h4>
                              <div>
                                <label for="Date of Cruise">Date of Cruise</label><br>
                                <input class="Date of Cruise" type="date" name="Dtcruise"><br><br>

                                <label for="No. of Participants">No. of Participants</label><br>
                                <input class="No. of Participants" type="text" name="Participants" placeholder="0"><br><br>

                                <label for="Food Request">Food Request</label><br>
                                <select class="new" name="Frequest">
                                  <option>Breakfast</option>
                                  <option>Lunch</option>
                                  <option>Dinner</option>
                                 </select><br><br>
                                 
                                 <label for="Amount">Amount</label><br>
                                <input type="text" name="Amount" placeholder="Enter Amount"><br><br>

  
                                <h4><u>Contact Information</u></h4>

                                <label for="Id">Id</label><br>
                                <input class="Name" type="text" name="Id" placeholder="Id"><br><br>

                                <label for="Name">Name</label><br>
                                <input class="Name" type="text" name="Name" placeholder="Name"><br><br>
                               
                                <label for="Phone number">Phone number</label><br>
                                <input type="text" name="Phoneno" placeholder="Phone number"><br><br>

                                <label for="Special Requests">Special Requests</label><br>
                                <textarea rows="2" cols="20" name="Srequest"></textarea> <br><br>
                                
                                <button type="submit" name="Submit">Submit</button>
                               
                              </div>
                              </form>

                          </div>
                        </div>
                      </div>



                      <div id="modalseventeen" class="modal">
                        <div class="modal-content">
                          <div class="Tour-Reservation-form">
                            <a class="close">&times;</a>
                            <form action="" method="POST">
                              <h2>Cruise Payment</h2>
                              <h4><u>Your Card Information</u></h4>
                              <div>

                                <input type="text" name="Id" placeholder="Id" class="aaa">
                                <input type="submit" name="Search" placeholder="Search" class="aaa"><br><br>

                                <?php
                                  $con = mysqli_connect("localhost","root","","tourproject");
                                 if(isset($_POST['Search']))
                               {
                                             $Id = $_POST['Id'];
                                             $query = "SELECT * from cruiseregistration WHERE Id = '$Id' ";
                                            $query_run = mysqli_query($con,  $query);
 
                                           if(mysqli_num_rows($query_run) > 0)
                                          {
                                     while($row = mysqli_fetch_array($query_run))
                                  {?>
                                 <label for="Name">Name</label><br>
                                <input class="Name" type="text" name="Name" placeholder="Name" value="<?php  echo $row['Name']; ?>" readonly><br><br> 

                                <label for="Amount">Amount</label><br>
                                <input type="text" name="Amount" placeholder="Enter Amount" value="<?php  echo $row['Amount']; ?>" readonly><br><br>
                               
                               
                                   <?php
                                  }
                             
                                }
                               else
                               {
                                  echo "No Data Available"; 
                               }
                             }
                            ?>

                                <label for="Select a Card">Select a Card</label><br>
                                  <select class="new" name="Card" value="Card">
                                    <option>Card 1</option>
                                    <option>Card 2</option>
                                    <option>Card 3</option>
                                    <option>Card 4</option>
                                </select><br><br>

                                <label for="Card Number">Card Number</label><br>
                                <input type="text" name="Cardno" placeholder="Card Number"><br><br>
  
                                <label for="Card Identification Number">Card Identification Number</label><br>
                                <input type="text" name="Idno" placeholder="Card Identification Number"><br><br>
  
                                 
                                <label for="Expiration Date">Expiration Date</label><br>
                                <input type="date" name="Expdate"> <br><br><br>
  
                               <button type="submit" name="Pay">Pay</button>
                              </div>
                              </form>

                          </div>
                        </div>
                      </div>


                      <?php

include 'dbcon.php';


if(isset($_POST['Pay']))
{
  $Id = mysqli_real_escape_string($con, $_POST['Id']);
  $Name = mysqli_real_escape_string($con, $_POST['Name']);
  $Amount = mysqli_real_escape_string($con, $_POST['Amount']);
  $Card = mysqli_real_escape_string($con, $_POST['Card']);
  $Cardno = mysqli_real_escape_string($con, $_POST['Cardno']);
  $Idno = mysqli_real_escape_string($con, $_POST['Idno']);
  $Expdate = mysqli_real_escape_string($con, $_POST['Expdate']);
    

    $insertquery =  "insert into cruisepayment(Id,Name,Amount,Card,Cardno,Idno,Expdate) values ('$Id','$Name','$Amount','$Card','$Cardno','$Idno',' $Expdate')";
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






                      <div id="modalfive" class="modal">
                        <div class="modal-content">
                          <div class="Tour-Reservation-form">
                            <a class="close">&times;</a>
                            <form action="Carbooking.php" method="POST">
                              <h2>Car Booking</h2>
                              <h4><u>Your Personal Information</u></h4>
                              <div>
                                <label for="Id">Id</label><br>
                                <input class="Id" type="text" name="Id" placeholder="Enter Id"><br><br>

                                <label for="Name">Name</label><br>
                                <input class="Name" type="text" name="Name" placeholder="Enter Name"><br><br>

                                <label for="Email">Email</label><br>
                                <input class="Email" type="text" name="Email" placeholder="Enter Email"><br><br>

                                <label for="Country Code">Country Code</label><br>
                                <select class="new" name="Code">
                                  <option>Country Code(+97)</option>
                                  <option>Country Code(+98)</option>
                                  <option>Country Code(+99)</option>
                                  <option>Country Code(+10)</option>
                                  <option>Country Code(+11)</option>
                              </select><br><br>

                                <label for="Phone No.">Phone No.</label><br>
                                <input class="Phone No." type="text" name="Phoneno" placeholder="Enter Phone No."><br><br>

                                <label for="Departure Date">Departure Date</label><br>
                                <input type="date" name="Depdate"><br><br><br>

                                <label for="Amount">Amount</label><br>
                                <input type="text" name="Amount"><br><br>

                                <button type="submit" name="Book">Book</button>
                               
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>


                      <div id="modalsix" class="modal">
                        <div class="modal-content">
                          <div class="Tour-Reservation-form">
                            <a class="close">&times;</a>
                            <form action="" method="POST">
                              <h2>Car Payment</h2>
                              <h4><u>Your Card Information</u></h4>
                              <div>

                                <input type="text" name="Id" placeholder="Id" class="aaa">
                                <input type="submit" name="Search" placeholder="Search" class="aaa"><br><br>

                                <?php
                                  $con = mysqli_connect("localhost","root","","tourproject");
                                 if(isset($_POST['Search']))
                               {
                                             $Id = $_POST['Id'];
                                             $query = "SELECT * from carbooking WHERE Id = '$Id' ";
                                            $query_run = mysqli_query($con,  $query);
 
                                           if(mysqli_num_rows($query_run) > 0)
                                          {
                                     while($row = mysqli_fetch_array($query_run))
                                  {?>
                                 <label for="Name">Name</label><br>
                                <input class="Name" type="text" name="Name" placeholder="Name" value="<?php  echo $row['Name']; ?>" readonly><br><br> 

                                <label for="Amount">Amount</label><br>
                                <input type="text" name="Amount" placeholder="Enter Amount" value="<?php  echo $row['Amount']; ?>" readonly><br><br>
                               
                               
                                   <?php
                                  }
                             
                                }
                               else
                               {
                                  echo "No Data Available"; 
                               }
                             }
                            ?>

                                <label for="Select a Card">Select a Card</label><br>
                                  <select class="new" name="Card" value="Card">
                                    <option>Card 1</option>
                                    <option>Card 2</option>
                                    <option>Card 3</option>
                                    <option>Card 4</option>
                                </select><br><br>

                                <label for="Card Number">Card Number</label><br>
                                <input type="text" name="Cardno" placeholder="Card Number"><br><br>
  
                                <label for="Card Identification Number">Card Identification Number</label><br>
                                <input type="text" name="Idno" placeholder="Card Identification Number"><br><br>
  
                                 
                                <label for="Expiration Date">Expiration Date</label><br>
                                <input type="date" name="Expdate"> <br><br><br>
  
                               <button type="submit" name="Pay">Pay</button>
                              </div>
                              </form>

                          </div>
                        </div>
                      </div>

                      <?php

include 'dbcon.php';


if(isset($_POST['Pay']))
{
   $Id = mysqli_real_escape_string($con, $_POST['Id']);
   $Name = mysqli_real_escape_string($con, $_POST['Name']);
   $Amount = mysqli_real_escape_string($con, $_POST['Amount']);
   $Card = mysqli_real_escape_string($con, $_POST['Card']);
   $Cardno = mysqli_real_escape_string($con, $_POST['Cardno']);
   $Idno = mysqli_real_escape_string($con, $_POST['Idno']);
   $Expdate = mysqli_real_escape_string($con, $_POST['Expdate']);
    

    $insertquery =  "insert into carpayment(Id,Name,Amount,Card,Cardno,Idno,Expdate) values ('$Id','$Name','$Amount','$Card','$Cardno','$Idno',' $Expdate')";
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



                      <div id="modalfifteen" class="modal">
                        <div class="modal-content">
                          <div class="Tour-Reservation-form">
                            <a class="close">&times;</a>
                            <form action="Feedbackdetails.php" method="POST">
                              <h2>Feedback Details</h2>
                              <div>

                              <label for="Name">Name</label><br>
                              <input type="text" name="Name" placeholder="Enter Name"><br><br>

                              <label for="Phone number">Phone number</label><br>
                              <input type="text" name="Phoneno" placeholder="Enter Phoneno"><br><br>

                              <label for="Email Address">Email Address</label><br>
                              <input type="text" name="Email" placeholder="Enter Email"><br><br>

                               
                              <label for="Feedback">Feedback</label><br>
                              <input type="text" name="Feedback"> <br><br><br>

                             <button type="submit" name="Submit">Submit</button>
                              </div>
                              </form>

                          </div>
                        </div>
                      </div>





                </div>       
            </div>
        </div>
        <script>
            let modalBtns = [...document.querySelectorAll(".button")];
            modalBtns.forEach(function (btn) {
            btn.onclick = function () {
            let modal = btn.getAttribute("data-modal");
            document.getElementById(modal).style.display = "block";
         };
   });
           let closeBtns = [...document.querySelectorAll(".close")];
           closeBtns.forEach(function (btn) {
           btn.onclick = function () {
           let modal = btn.closest(".modal");
           modal.style.display = "none";
           };
    });
           window.onclick = function (event) {
           if (event.target.className === "modal") {
           event.target.style.display = "none";
        }
    };


        </script>
    </body>
</html>