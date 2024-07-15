<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coffee Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
  <div class="all-content">
   
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="logo"><img src="./images/abhi's caef.jpeg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallary.php">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="book.php">Book A Table</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

<!-- menu -->
<section class="menu" id="menu">
    <div class="container">
    <div class="heading3">Coffee <span>Menu</span></div>
  </div>
    <div class="container" id="container2">
    <div class="row">
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/cold coffee.jpg" alt="">
          <div class="card-body">
            <div class="star text-center">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <h3>Cold <br> Coffee</h3>
            <p>Rs.50 <strike>Rs.70</strike></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/crush.jpeg" alt="">
          <div class="card-body">
            <div class="star text-center">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <h3>Cold Coffee <br> With Crush</h3>
            <p>Rs.60 <strike>Rs.80</strike></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/coffeeice.jpg" alt="">
          <div class="card-body">
            <div class="star text-center">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <h3>Cold Coffee <br>With Icecream</h3>
            <p>Rs.70 <strike>Rs.80</strike></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/hot.webp" alt="">
          <div class="card-body">
            <div class="star text-center">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <h3>Hot <br>Coffee</h3>
            <p>Rs.20 <strike>Rs.30</strike></p>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/htochocolate.jpg" alt="">
          <div class="card-body">
            <div class="star text-center">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <h3>Hot <br> Chocolate</h3>
            <p>Rs.30 <strike>Rs.40</strike></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/special.jpg" alt="">
          <div class="card-body">
            <div class="star text-center">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
            </div>
            <h3>Special <br>Coffee</h3>
            <p>Rs.100 <strike>Rs.120</strike></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/milkcalories.jpg" alt="">
          <div class="card-body">
            <div class="star text-center">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <h3>Cold Coffee <br> With Milk Calories</h3>
            <p>Rs.120 <strike>Rs.150</strike></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/thundercoffee.jpg" alt="">
          <div class="card-body">
            <div class="star text-center">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <h3>Cold Coffee <br> With Thunder</h3>
            <p>Rs.110 <strike>$Rs.150</strike></p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- menu -->
  
  

   <!-- footer -->
   <footer id="footer">
    <div class="footer-logo text-center"><img src="./images/abhi's caef.jpeg" alt=""></div>
    <div class="socail-links text-center">
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-youtube"></i>
      <i class="fa-brands fa-pinterest-p"></i>
    </div>
    <div class="credite text-center">
        Designed By <a href="#"> Coders.</a>
    </div>
    <div class="copyright text-center">
      &copy; Copyright <strong><span>Coffee Shop</span></strong>. All Rights Reserved
  </div>
</footer>
   <!-- footer -->

   <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>


  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>