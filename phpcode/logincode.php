<?php

include("database.php");

  // login form

  if(isset($_POST['login-submit']))
 {
    $email       = $_POST['email'];
    $password    = $_POST['pwd'];

    $mysqli = "SELECT * FROM signupuser WHERE email ='$email' && password ='$password'";
    $result = mysqli_query ($conn ,$mysqli);
    
    $count = mysqli_num_rows($result);  
     
    if ($count != 1)
    {
      header ("location:../login.php?didnotlogin");
    } else
    {
      header ("location:../main-form.php");
      die;
    }
 
 }
     

