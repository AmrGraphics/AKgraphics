<?php include_once "validationBooking.php";
include "databasemysqli.php";  
session_start();

   if(isset($_COOKIE['user']) && $_COOKIE['user']!=NULL){
    $_SESSION["id"]=$_COOKIE['user'];
    $sql="SELECT*FROM members WHERE id={$_COOKIE['user']}";
    $result=mysqli_query($connection,$sql);
    $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
   }
           if(isset($_SESSION["id"])){
            $sql="SELECT*FROM members WHERE id={$_SESSION["id"]}";
            $result=mysqli_query($connection,$sql);
            $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo $getuser['id'];
           }
     if(isset($getuser)){ 
        if(($getuser['position']=="Dr" || $getuser['position']=="Assisstant") && isset($_GET['Room_Name'])){

                header("Location:booking_dr_ass.php?Room_Name=".$_GET['Room_Name']."&id=".$getuser['id']);
            
        }}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Booking.css">
    <title>Rooms Booking</title>
</head>
<body>
<div id="container">
    </div>
    <form  id="Booking" action="Booking.php" method="post" novalidate>
                <div class="form-left">
                    <h1>Rooms Booking</h1>
                    <label for="b_title">Book Title <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <input id="b_title" name="b_title" type="text" required>

                    <label for="b_date">Date <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label >
                    <input id="b_date" name="b_date" type="date" required>

                    <label for="b_start">Start Time <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <select class='b_b' id="b_start" name="b_start" required> 
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                    </select>

                    <label for="b_end">End Time <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <select class='b_b' id="b_end" name="b_end" required>
                    <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                     </select>
                </div>

                <div class="form-right">
                    <label for="b_attendees">Total number of attendees <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <input id="b_attendees" name="b_atte" type="number" min="1" max='100' required>

                    <label for="b_external_attendees">Number of External Attendees <span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <input id="b_external_attendees" type="number" name="b_exte" min="0" max='50' required>
                    <label for="b_Num_rooms">Avalable Rooms<span class="errors" style="color:red;font-size:10px;"><?php echo $mess ;?></span></label>
                    <select class='b_b' id="b_Num_rooms" name="room_num" type="text" required>
                            
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="Done" id="done" name="done" class="done">
                    <p class="errors"><?php echo $done ;?></p>
        </div>
</body>
<script src="JS/check avalabile booking.js"></script>
</html>