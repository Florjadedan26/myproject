<?php
// for form info
include_once("database.php");

 $emailz = $_SESSION["email"];
 $mysqli = "SELECT * from signupuser where email = '$emailz'";

 $result = mysqli_query($conn,$mysqli)or die(mysqli_error());

  if (mysqli_num_rows($result) > 0) 
 {
  $row = mysqli_fetch_assoc($result);

 }


 
