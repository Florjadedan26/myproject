<?php 

// for logout button
include_once("database.php");

if(isset($_POST['logout-button']))
{
  session_start();
  session_unset();
  session_destroy();
  header ("location:../login.php");

}
