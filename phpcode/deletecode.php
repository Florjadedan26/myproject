<?php
session_start();
include ('database.php');
if(isset ($_POST["Delete-button"]))
{
  $emailz      =$_SESSION['email'];
  $password    = $_POST['password'];
  $conpassword = $_POST['confirm-password'];

  if($_POST['password'] !== $_POST['confirm-password'])
  {
    header ('location:../deletepage.php?didnotmatch');
  
  } 
  else
  {
    mysqli_query($conn,"DELETE FROM signupuser WHERE email = '$emailz'");  
    header ("location:../login.php");
  }
}