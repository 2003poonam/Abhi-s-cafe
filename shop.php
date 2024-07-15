<?php
if(isset($_POST['contact-btn'])){
$servername = "localhost";
$username = "root";
$password ="";
$db = "shop";

$conn = mysqli_connect("$servername","$username","$password","$db");

if($conn->connect_error){
   die("Connection failed:" . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO shop (user_name,user_email,user_number,user_add,menu)VALUES (?,?,?,?,?)");
$stmt->bind_param("ssiss",$user_name,$user_email,$user_number,$date,$people);

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_number = $_POST['user_number'];
$date = $_POST['user_add'];
$people = $_POST['menu'];

if($stmt->execute() === TRUE){
   echo "Order Booking Successfully....";
}else{
   echo"ERROR:" . $stmt->error;
}

$stmt->close();
$conn->close();
}
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
<section class="shop" id="shop">
  <div class="container" style="height:100vh;">
    <div class="row">
      <div class="col-md-7">
       <div class="heading6">Shop <span>Now</span></div>

       
<form method="post">
       <input class="form-control" type="text" placeholder="Full Name" aria-label="default input example" name="user_name" required><br>
       <input class="form-control" type="email" placeholder="Email" aria-label="default input example" name="user_email"required><br>
       <input class="form-control" type="text" placeholder="Number" aria-label="default input example" name="user_number" required><br>
       <input class="form-control" type="text" placeholder="Address" aria-label="default input example" name="user_add" required><br>
<select name="menu" id="menu">
  <option value="value1">Cold Coffee</option>
  <option value="value2">Burger</option>
  <option value="value3">Pizza</option>
  <option value="value4">Pasta</option>
  <option value="value5">Icecream</option>
  <option value="value6">Milkshake</option>
</select>

       <button id="contact-btn" name="contact-btn">Shop Now</button>
       </form>
      </div>
      
    </div>
  </div>

</section>
<!-- contact -->

   <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>


  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>