<?php
include("database.php");

// signup form
 if(isset($_POST['signup-submit']))
  {         
       $firstname   = $_POST['firstname'];
       $lastname    = $_POST['lastname'];
       $address     = $_POST['address'];
       $phonenumber = $_POST['phonenumber'];
       $email       = $_POST['email'];
       $username    = $_POST['username'];
       $password    = $_POST['pwd'];
      
       $mysql_select = "SELECT * FROM signupuser where email = '$email'"; 
       $select = mysqli_query ($conn , $mysql_select) or die (mysqli_connect_error());
       $count = mysqli_num_rows ($select); 

       if ($count > 0)  
       {     
          header("location:../signup.php?invalidemail");   
          exit();   
       }
     else if (!preg_match("/^[0-9]{11}+$/", $phonenumber))
       {
          header("location:../signup.php?invalidphoneumber");   
          exit();
       }
       else 
       {
       $mysql_insert = "INSERT INTO signupuser (firstname, lastname, address, phonenumber, email, username, password)values ('$firstname','$lastname', '$address', '$phonenumber','$email','$username','$password')";  
       mysqli_query ($conn , $mysql_insert ) or die (mysqli_connect_error());
       
            header("location:../login.php"); 
            die; 
       }

       
  }
