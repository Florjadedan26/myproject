<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login&signup.css">
</head>
<body>

<div class="img-fluid">
  <div class="container">
      <div class="row">
          <div class="col-md-4 offset-md-4">               
              <div class="signup-form">
                <form action="phpcode/signupcode.php" method="post" class="mt-5 border p-4 bg-light shadow">
                    <div>
                       <h1 class="text-primary">Create Account</h1>
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name:<span class="text-danger">*</span>
                        </label> 
                        <input type="text" name="firstname" id="fname" class="form-control" placeholder="Enter First Name"required> 
                    </div> 
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name:<span class="text-danger">*</span>
                        </label> 
                        <input type="text" name="lastname" id="lname" class="form-control" placeholder="Enter Last Name"required> 
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address:<span class="text-danger">*</span>
                        </label> 
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" required > 
                    </div>

           

                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">phone number:<span class="text-danger">*</span>
                        </label> 
                        <input type="number" id="phonenumber" name="phonenumber"
                        class="form-control" placeholder="Enter 11 digit number" pattern="[0-9]{10}" required> 
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email"
                        id="email" aria-describedby="emailz" placeholder="Name@sample.com"  required >
                        <div id="emailz" class="form-text">Put an active email!</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="username" class="form-control" 
                        name="username" id="username" placeholder="username" required>
                        <label for="username" class="form-label">UserName:<span class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating">               
                        <input type="password" class="form-control" 
                        name="pwd" id="password" placeholder="password" required >
                        <label for="password" class="form-label">Password:<span class="text-danger">*</span></label>
                    </div> <br>

                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="signup-submit" value = "Sign Up" >submit</button>  
                    </div>

                    <div class="mb-3 float-end">
                       <small class="form-label">&copf; shopez</small>
                     </div>
                </form>
              </div>               
          </div>
      </div>
  </div>
</div>


    
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>