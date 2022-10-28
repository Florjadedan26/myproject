<?php
session_start();
include_once("database.php");
if (isset($_POST['upload']))
{
  $emailz     = $_SESSION["email"];
  $fileimg    = $_FILES ["fileimg"];
  $imagename  = $_FILES ["fileimg"]["name"];
  $imagesize  = $_FILES ["fileimg"]["size"];
  $imagetemp  = $_FILES ["fileimg"]["tmp_name"];
  $imageerror = $_FILES ["fileimg"]["error"];
  $location  = "../img-upload/".$imagename;

  $imgext       = explode('.',$imagename);
  $imgupplowext = strtolower(end($imgext));
  $allow        = array ('jpg','jpeg','png');


   if(in_array($imgupplowext,$allow))
   {
     if($imageerror === 0 )
      {
        if($imagesize < 10000000)
        {
          // $imgnewname= uniqid("", true ).".".$imgupplowext;
          // $location  = "../img-upload/".$imgnewname;
          
          if (empty('$fileimg'))
          {
            header("location:../profile.php?nopicture");
            exit ();
          } 
          else
          {
            mysqli_query($conn,"UPDATE signupuser SET img = '$imagename' WHERE email ='$emailz'");
            move_uploaded_file($imagetemp,$location);
            header("location:../profile.php?success");

          }

        }
         else
         {
          header("location:../profile.php?toobig");
          exit ();
         }
      } 
      else
      {
        header("location:../profile.php?haveanerror");
        exit ();
      }
   } 
   else 
   {
      header("location:../profile.php?notsucces");
      exit ();
   }
    
}
