<?php
//for update 
include_once("database.php");

if (isset($_POST['update-button']))
{
   
   $firstname   = $_POST['firstname'];
   $lastname    = $_POST['lastname'];
   $address     = $_POST['address'];
   $phonenumber = $_POST['phonenumber'];
   $email       = $_POST['email'];
   $username    = $_POST['username'];
   $password    = $_POST['pwd'];
 
  $mysqli_update ="UPDATE signupuser SET firstname='$firstname',lastname='$lastname',address ='$address',phonenumber='$phonenumber', email='$email', username = '$username',password ='$password' WHERE email='$email'";
  
 mysqli_query($conn,$mysqli_update) or die (mysqli_connect_error());
 header("location:../profile.php");   
         
}


