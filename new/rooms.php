<?php 
include_once "databasemysqli.php";
include 'login.php';
session_start();
if(isset($_SESSION["id"])){
   $sql="SELECT*FROM members WHERE id={$_SESSION["id"]}";
   $result=mysqli_query($connection,$sql);
   $getuser=mysqli_fetch_array($result,MYSQLI_ASSOC);

}else{
   header("Location:index.php"); 
}
 $rooms=["A106","A105","A104","A103","A108","A107","A101","A102","A207","A206","A205","A204","A203","A210","A209","A208","A201","A202","A307","A306","A305","A304","A303","A310","A309","A308","A301","A302","A407","A406","A405","A404","A403","A409","A408","A401","A402"];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="techno tour website design pro\techno tour pro copy.png" type="image/x-icon">  
      <link rel="stylesheet" href="CSS\rooms.css">
      <link rel="stylesheet" href="CSS\header.css">
      <link rel="stylesheet" href="CSS\popup.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500;600;700&display=swap" rel="stylesheet">  
      <title>Rooms</title>
   </head>
   <body background="techno tour website design pro\NCT building4.png">    
   <div id='add-event'>
       <div id='exit' onclick='show();'>×</div>
       <div id='show' style='color:white;'></div>
   </div>

 <!-- php code for all rooms -->

   <header id="header-style" >
         <img class="logo-img" onclick="window.location.assign('index.php');" src="techno tour website design pro\web site logo2.png" alt="..">
         <ul >
            <li><a href="index.php" class="links">Home</a></li>
            <?php if(isset($getuser)){ echo "<li><a href='booking.php' class='links'>Booking</a></li>";} ?>
            <li><a href="what's new.php" class="links">Broadcast</a></li>
            <li><a href="about us.php" class="links">About</a> </li>
         </ul>

         <div class="search-logo"><input class="search" type="text">Search <img class="search-logo-img" src="techno tour website design pro\search.png" alt="..">
         </div>
         <div class="user-logo"><a <?php
          if(isset($getuser)){
            echo "onclick='logout_show();'";
            }else{
            echo "href='form.php'";
              }
         ?> id="login-logo" >
         <?php 
         if(isset($getuser)){
         echo $getuser["fname"];
         }else{
         echo "login";
           }
          ?>
         </a><img class="login-logo-img" onclick="logout_show();" src="techno tour website design pro\login.png" alt=".."></div>
         <?php if(isset($getuser)){echo "
         <form method='post' id='out_form'>            

            <button name='logout' style='margin:0;margin-left:10px;background-color:rgba(0,0,0,0);border:none;'><img src='techno tour website design pro\logout.png' id='logout' title='log out' width='23px'></button>

            </form>
            ";} ?>
      </header>
      <div class="bage">
      <div id="f-btns">
         <div id="f-btn1" onclick="floor1();" class="fbtn">Floor 1</div>
         <div id="f-btn2" onclick="floor2();" class="fbtn">Floor 2</div>
         <div id="f-btn3" onclick="floor3();" class="fbtn">Floor 3</div>
         <div id="f-btn4" onclick="floor4();" class="fbtn">Floor 4</div>
      </div>
<div id="cont-home">
         <div class="container">
            <div id="cube">
               <!--************************** face 1  ***************************************************************-->
               <div id="f1" class="face">
                  <div id="row1">
                     <?php
                     $i=0;
                      for($i=0;$i<4;$i++){
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
                  <div id="row2">
                  <?php
                      for($i=4;$i<8;$i++){
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
               </div>
               <!--************************** face 2  ***************************************************************-->
               <div id="f2" class="face">
                  <div id="row1">
                     <?php
                      for($i=8;$i<13;$i++){                        
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
                  <div id="row2">
                     <?php
                      for($i=13;$i<18;$i++){                       
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
               </div>
               <!--************************** face 3  ***************************************************************-->
               <div id="f3" class="face">
                  <div id="row1">
                     <?php
                      for($i=18;$i<23;$i++){                       
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
                  <div id="row2">
                     <?php
                      for($i=23;$i<28;$i++){                     
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
               </div>
               <!--************************** face 4  ***************************************************************-->
               <div id="f4" class="face">
                  <div id="row1">
                      <?php
                      for($i=28;$i<33;$i++){     
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                     }
                     ?>
                  </div>
                  <div id="row2">
                      <?php
                      for($i=33;$i<37;$i++){     
                        echo "<div onmouseleave=' hide_book(`".$rooms[$i]."`);' onclick='event_display(`".$rooms[$i]."`)' onmouseover='show_book(`".$rooms[$i]."`);' id='div".$rooms[$i]."' class='rooms'></div>";
                      }
                      ?>
                  </div>
               </div>
               <!--************************** buttom  ***************************************************************-->
               <div id="bottom" class="face"></div>
            </div>
         </div>
         </div>
        </body>
        <script src="JS/home js.js"></script>
        <script src="JS/header.js"></script>
        <script src="JS/rooms.js"></script>
        </html>