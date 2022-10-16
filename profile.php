<?php
  session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/profile.css">
</head>

<body>
 
  <!--profile here-->
<div class="container ">
  <div class="row g-10">
      <div class="col-md-4 mt-5 text-center">
          <div class="card">
            <img src="img/dum.png" class="card-img-top" alt="this is a tablet">
           
          <div class="card-body mt-3">
            <h5 class="card-title">My Account</h5>
            <p class="card-text text-danger "></p>
            <a href="" class="btn btn-primary">Edit</a> <br>
            <a href="main-form.php" class="btn btn-primary mt-2" >home</a>
          </div>
        </div> 
      </div><!--left side-->

       <div class="col-md-8 mt-5 border p-3 bg-light">
          <div class="form">
            <form class="">
              <div>
                <h1 >Profile</h1>
              </div>

              <div class="mb-3">
                  <label for="name" class="form-label">First Name:<span class="text-danger">*</span>
                  </label> 
                  <input type="text" id="name" class="form-control" placeholder="Enter Name" required> 
              </div>

         

                <div class="mb-3">
                  <label for="email" class="form-label">Email:<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" 
                  id="email" aria-describedby="emailz" placeholder="Name@sample.com" required >
                  <div id="emailz" class="form-text">You can only change once!</div>
              </div>

              <div class="form-floating mb-3">
                  <input type="username" class="form-control" id="username" placeholder="username" required>
                  <label for="username" class="form-label">UserName:<span class="text-danger">*</span></label>
              </div>

              <div class="form-floating">               
                <input type="password" class="form-control" id="password" placeholder="password"required>
                <label for="password" class="form-label">Password:<span class="text-danger">*</span></label>
            </div>
              <br>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Save</button>
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