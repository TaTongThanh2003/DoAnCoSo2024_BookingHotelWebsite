<?php
   $hname = 'localhost:8080';
   $uname = 'root';
   $pass = '';
   $db = 'WebsiteBookingHotel';
   $con = mysqli_connect($hname, $uname, $pass, $db);
   if(!$con){
    die("Cannot Connect to Database". mysqli_connect_error());
   }
?>