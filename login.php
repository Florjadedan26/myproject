<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login&signup.css">
</head>
<body>
<div class="img-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="signup-form ">

          <form action ="phpcode/logincode.php" method= "post" class="form1 border p-4 bg-light shadow">
            <div class="text-primary">
              <h1>Wellcome</h1>
            </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email:</label>
              <input type="email" class="form-control" name="email" id="Email" placeholder="Name@sample.com" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password:</label>
              <input type="password" class="form-control" name="pwd" id="password" placeholder="Password"  required>
            </div>
 
            <div class="row">
              <div class="col">
                <div class="mb-3">
                   <button type="submit" name="login-submit" value="login" class="btn btn-primary"><!--<a href="" class="btn btn-primary"></a>-->Login</button> 
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <a type ="button" role="button" href="signup.php" class="btn btn-primary">Signup</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!--end container for login-->
</div>


    
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
  </html>