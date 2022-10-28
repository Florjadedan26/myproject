<?php
 session_start();
 if(!isset($_SESSION["email"]))
 {
   header ("location:login.php");
 }
 else{
  // echo'wellcome'.$_SESSION ["email"];
}
include 'phpcode/profilecode.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>delete account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/profile&delete.css">
</head>

<body>

  <!--profile here-->
<div class="container justify-center ">
  <div class="row g-10">
       <div class="col-md-6 mt-6 offset-md-3 border p-3 bg-light">
          <div class="form">
            <form  action ="phpcode/deletecode.php" method="post" class="row g-3" enctype="multipart/form-data" >
              <div>
                <h1 >Delete your Account</h1>
              </div>

                    <div class="col-md-6">
                      <span class="text-danger">Are you sure you want to delete your account ?</span></br><?php echo $row['firstname']?>
                      
                    </div>

                    <div class="col-md-6">
                       
                    </div>

                    <div class="col-md-6 mt-4 form-floating ">
                        <input type="password" class="form-control" 
                        name="password" id="password" placeholder="password"
                        required>
                        <label for="password" class="form-label">Password:<span class="text-danger">*</span></label>
                    </div>

                    <div class="col-md-6 mt-4 form-floating">               
                        <input type="password" class="form-control" 
                        name="confirm-password" id="confirm-password" placeholder="confirm-password" required >
                        <label for="confirm-password" class="form-label">confirm-password:<span class="text-danger">*</span></label>
                    </div> <br>
                    <div class="col-md-6 mt-4">
                        <button type="submit" class="btn btn-primary" name="Delete-button" value ="button">Delete</button>
                    </div>
                    <div class="col-md-6 mt-4">
                        <a type ="button" role="button" href="profile.php" class="btn btn-primary">
                          go back </a>   
                    </div>
            
            </form>
          </div>
       </div><!--right side-->
    
  </div>
</div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>