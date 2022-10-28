<?php
  session_start();
;
  if(!isset($_SESSION["email"]))
  {
    header ("location:login.php");
  } else{
    // echo'wellcome'.$_SESSION ["email"];
  }
  
   include 'phpcode/profilecode.php';
  
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/profile&delete.css">
</head>

<body>

  <!--profile here-->
<div class="container ">
  <div class="row g-10">
    <div class="col-md-4 mt-5  text-center">
     <div class="card mb-3">
        <form action ="phpcode/profileimagecode.php" method="post" enctype="multipart/form-data">
          <div class="card-body mt-3">
            <h5 class="card-title">wellcome</h5>
            <label class="card-text"><?php echo $row['firstname'] ?> </label>
          </div>

              <div class="form-pictures mb-2 " >      
          
                  <img src="img-upload/<?php echo $row['img'] ?>" class="card-img-top" style="width:128px;height:128px" alt="upload your profile picture">
                  <input type="file" class ="form-control  mt-3" name ="fileimg" accept = "image/jpg, image/jpeg, image/png" require> 
                  <button type="submit" class = "btn btn-primary mt-2" name ="upload" value =" upload" >UPLOAD</button>
             </div>
        </form> 
        
              <div class="mb-2">
                        <a type ="button" role="button" href="main-form.php" class="btn btn-primary">home</a>  
              </div>

        <form action ="phpcode/logoutcode.php" method="post">
                <div class="mb-2">
                         <a type ="button" role="button" href="deletepage.php" class="btn btn-primary">
                          delete account</a>    
                </div>

                <div class="mb-2">
                          <button type="submit" class="btn btn-primary" name="logout-button" value ="logout">logout</button>  
                </div>
        </form>

    </div><!--end of card -->
       
       
    </div><!--left side-->

       <div class="col-md-8 mt-5 border p-3 bg-light">
          <div class="form">
            <form  action ="phpcode/updatecode.php" method="post"  class="row g-3">
              <div>
                <h1 >Profile</h1>
              </div>
                    <div class="col-md-6">
                      <label for="name" class="form-label">First Name:<span class="text-danger">*</span>
                      </label> 
                      <input type="text" name="firstname" id="fname" class="form-control" placeholder="Enter Name" value ="<?php echo $row['firstname']?>" required> 
                    </div>

                    <div class="col-md-6">
                        <label for="lname" class="form-label">Last Name:<span class="text-danger">*</span>
                        </label> 
                        <input type="text" name="lastname" id="lname" class="form-control" placeholder="Enter Last Name" value ="<?php echo $row['lastname']?>" required> 
                    </div>

                    <div class="col-md-12">
                        <label for="address" class="form-label">Address:<span class="text-danger">*</span>
                        </label> 
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter address"
                        value ="<?php echo $row['address']?>" 
                        required > 
                    </div>

                    <div class="col-md-6">
                        <label for="phonenumber" class="form-label">phone number:<span class="text-danger">*</span>
                        </label> 
                        <input type="number" id="phonenumber" name="phonenumber"
                        class="form-control" placeholder="Enter 11 digit number" name="phonenumber"value ="<?php echo $row['phonenumber']?>" required> 
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email:<span class="text-danger">*</span></label>
                        <input type="email" class="form-control-plaintext" name="email"
                        id="email" aria-describedby="emailz" placeholder="Name@sample.com" value ="<?php echo $row['email']?>"  required >
                        <div id="emailz" class="form-text">your active email!</div>
                    </div>
                    <div class="col-md-6 mt-4 form-floating ">
                        <input type="username" class="form-control" 
                        name="username" id="username" placeholder="username"
                        value ="<?php echo $row['username']?>"  required>
                        <label for="username" class="form-label">UserName:<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-6 mt-4 form-floating">               
                        <input type="password" class="form-control" 
                        name="pwd" id="password" placeholder="password" value ="<?php echo $row['password']?>" required >
                        <label for="password" class="form-label">Password:<span class="text-danger">*</span></label>
                    </div> <br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-lg" name="update-button" value ="button">update</button>
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