<?php
  session_start();
  if(!isset($_SESSION["email"]))
  {
    header ("location:login.php");
  } else{
    // echo'wellcome'.$_SESSION ["email"];
  }
 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>mainform</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/mainpage.css">
</head>

<body>

<div class="img-fluid"> 
<!--navbar-->
  <Nav class="navbar fixed-top navbar-expand-lg bg-light">
    <div class="container">
      <a href="#" class="navbar-brand d-line-block align-text-top"><span>shoppez</span> </a>
      <button
       class="navbar-toggler" 
       type="button" 
       data-bs-toggle="collapse" 
       data-bs-target="#navbartoggle" 
       aria-controls="navbartoggle" 
       aria-expanded="false" 
       aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbartoggle">
        <ul class="navbar-nav ms-auto">
          <li class="">
            <a class="nav-link" href="#"><span class="text-danger">Home</span></a>
          </li>
          <li class="">
            <a class="nav-link" href="profile.php">profile</a>
          </li>
          <li class="">
            <a class="nav-link" href="#">contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </Nav>
<!--end navbar-->

<!-- container for products -->
<div class="container border p-4 bg-light shadow text-center">
  <div class="row  gx-2 gy-3" >
    
        <div class="col"> 
            <div class="dropdown" >
              <a href="#" class="btn btn-outline-primary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Electronics</a>
             <ul class="dropdown-menu text-center">
              <li><span class="span1">Phone and Tablet</span> </li>
              <li><a href="#tablet" class="dropdown-item">Tablet</a></li>
              <li><a href="#cellphone" class="dropdown-item">Smart Phone</a></li>
              <li><a href="#" class="dropdown-item">Power Bank</a></li>
              <li><a href="#" class="dropdown-item">Smart Glases </a></li>
             </ul>
            </div>
        </div>
        <div class="col">
            <div class="dropdown" >
             <a href="#" class="btn btn-outline-primary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fashion</a>
             <ul class="dropdown-menu text-center">
              <li><span class="span1">Fashion Accessories</span> </li>
              <li><a href="#" class="dropdown-item">Gloves</a></li>
              <li><a href="#" class="dropdown-item">Sunglasses</a></li>
              <li><a href="#" class="dropdown-item">Jewellery</a></li>
              <li><a href="#" class="dropdown-item">Belts</a></a></li> 
             </ul>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
             <a href="#" class="btn btn-outline-primary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Outdoors</a>
             <ul class="dropdown-menu text-center">
              <li><span class="span1">Outdoor Recreation </span></li>
              <li><a href="#" class="dropdown-item">Equipment</a></li>
              <li><a href="#" class="dropdown-item">Camping</a></li>
              <li><a href="#" class="dropdown-item">Fishing</a></li>
              <li><a href="#" class="dropdown-item">Safety & Survival</a></li>
             </ul>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
             <a href="#" class="btn btn-outline-primary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">toys</a>
             <ul class="dropdown-menu text-center">
              <li><span class="span1">Toys</span></li>
              <li><a href="#" class="dropdown-item">Puzzles</a></li>
              <li><a href="#" class="dropdown-item">Dolls</a></li>
              <li><a href="#" class="dropdown-item">Board Games</a></li>
              <li><a href="#" class="dropdown-item">Fidget Spinners</a></li>
             </ul>
            </div>
        </div>
        <div class="col">
            <div class="dropdown">
             <a href="#" class="btn btn-outline-primary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Heath Product</a>
             <ul class="dropdown-menu text-center">
              <li><span class="span1">Medical Supplies</span> </li>
              <li><a href="#" class="dropdown-item">Thermometers</a></li>
              <li><a href="#" class="dropdown-item">Weight Scales</a></li>
              <li><a href="#" class="dropdown-item">Scrub Suits</a></li>
              <li><a href="#" class="dropdown-item">Pulse Oximeters</a></li>
             </ul>
            </div>
          </div>  
          <div class="col">
            <div class="dropdown">
             <a href="#" class="btn btn-outline-primary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Automotive</a>
             <ul class="dropdown-menu text-center">
              <li><span class="span1">Car Accessories</span></li>
              <li><a href="#" class="dropdown-item">Air Compressors</a></li>
              <li><a href="#" class="dropdown-item">Car Bumpers</a></li>
              <li><a href="#" class="dropdown-item">Car Batteries</a></li>
              <li><a href="#" class="dropdown-item">Tachometers</a></li>
             </ul>
            </div>
          </div>
   
  </div>
</div>
<!--end products-->

<!--carouel img-->
<div class="container max-height d-flex align-item-center mt-2">
  <div id="carousel1" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-label="slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" class="" aria-label="slide 2"></button>
      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" class="" aria-label="slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="500">
        <img src="img/sm0.png" class="d-block w-100" alt="this is a banner">
      </div>

      <div class="carousel-item" data-bs-interval="500">
        <img src="img/sm0.png" class="img-fluid d-block w-100" alt="this is a banner">
      </div>
      <div class="carousel-item " data-bs-interval="500">
        <img src="img/sm0.png" class="d-block w-100" alt="this is a banner">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 
</div> 
<!--end div-->

<!--item/tablet-->
<div class="container mt-2 " id="tablet" >
  <div class="row gy-3">
      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/tab1.jpg" class="card-img-top" alt="this is a tablet">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Samsung Galaxy Tab S6 Lite</h5>
          <p class="card-text text-danger ">??? 12,000.00 <br> ??? 49,419.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>
      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/tab2.jpg" class="card-img-top" alt="this is a tablet">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Xiaomi Mi Pad 5 </h5>
          <p class="card-text text-danger">??? 15,262.00 <br> ??? 59,949.75</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>
    
      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/tab3.jpg" class="card-img-top" alt="this is a tablet">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Lenovo Tab P11 </h5>
          <p class="card-text text-danger">??? 6,385.00 <br> ??? 27,741.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>

      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/tab4.jpg" class="card-img-top" alt="this is a tablet">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Apple iPad 9th Generation </h5><br>
          <p class="card-text text-danger"> ??? 17,629.34 <br> ??? 49,972.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>

      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/tab5.jpg" class="card-img-top" alt="this is a tablet">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">OPPO Pad </h5><br>
          <p class="card-text text-danger">??? 25,889.40 <br> ??? 40,601.95</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>

      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/tab6.jpg" class="card-img-top" alt="this is a tablet">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Kindle Paperwhite </h5><br>
          <p class="card-text text-danger">??? 5,145.00 <br> ??? 14,999.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>
  </div>
</div>
<!--end for tablet-->

<!--item/cellphone-->
<div class="container mt-2 " id="cellphone" >
  <div class="row ">
      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/cel1.jpg" class="card-img-top" alt="this is a cellphone">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Apple iPhone 11</h5>
          <p class="card-text text-danger ">??? 27,490.00 <br> ??? 43,990.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>
      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/cel2.jpg" class="card-img-top" alt="this is a cellphone">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Samsung Galaxy Note10 Plus </h5>
          <p class="card-text text-danger">??? 14,000.00 <br> ??? 100,812.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>
    
      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/cel3.jpg" class="card-img-top" alt="this is a cellphone">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Xiaomi Redmi Note 10 Pro </h5>
          <p class="card-text text-danger">??? 7,500.00 <br> ??? 39,999.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>

      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/cel4.jpg" class="card-img-top" alt="this is a cellphone">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">LG V50 ThinQ 5G  </h5><br>
          <p class="card-text text-danger"> ??? 9,905.52 <br> ??? 15,988.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>

      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/cel5.jpg" class="card-img-top" alt="this is a cellphone">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Infinix Note 10 Pro</h5><br>
          <p class="card-text text-danger">??? 3,375.00 <br> ??? 17,265.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>

      <div class="col-12 cold-md-6 col-lg-4 border p-4 bg-light shadow">
        <div class="card">
          <img src="img/cel6.jpg" class="card-img-top" alt="this is a cellphone">
        </div>  
        <div class="card-body mt-3">
          <h5 class="card-title">Vivo Y11  </h5><br>
          <p class="card-text text-danger">??? 3,499.00 <br> ??? 8,999.00</p>
          <a href="" class="btn btn-primary">Buy Me</a>
        </div>
      </div>
  </div>
</div>
<!--end of cellphone-->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>