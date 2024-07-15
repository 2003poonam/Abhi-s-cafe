<?php
$servername="localhost";
$username="root";
$password="";
$database="contact";
$conn = new mysqli($servername,$username,$password,$database);


if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_number = $_POST['user_number'];

$sql = "INSERT INTO `contact us`  VALUES ('$user_name', '$user_email', $user_number)";


if($conn->query($sql) === TRUE){
    echo"Your response submitted Successfully...";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();


?>


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

<!-- contact -->
<section class="contact" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
       <div class="heading6" style="color: black;">Contact <span>Us</span></div>

       <p>For inquiries or assistance, please email us at info abhiscafe@gmail.com or call us at +(91)9825645872.
        <br> We're here to help you optimize your cafe operations.
       </p>
<form method="post">
       <input class="form-control" type="text" placeholder="Name" aria-label="default input example" name="user_name" required><br>
       <input class="form-control" type="email" placeholder="Email" aria-label="default input example" name="user_email"required><br>
       <input class="form-control" type="text" placeholder="Number" aria-label="default input example" name="user_number" required><br>
       <button id="contact-btn" name="contact-btn">Send Message</button>
       </form>
      </div>
      <div class="col-md-5" id="col">
        <h1>Info</h1>
        <p><i class="fa-regular fa-envelope"></i> abhiscafe@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i> +91 9825645872</p>
       <p><i class="fa-solid fa-building-columns"></i> Shivanjali Apartment, Shop No:9,10,11,Road</p>
       <p>Visawa Naka,Pirwadi,Maharashtra 415002</p>
      </div>
    </div>
  </div>

</section>
<!-- contact -->


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