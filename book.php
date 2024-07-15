<?php
if(isset($_POST['contact-btn'])){
$servername = "localhost";
$username = "root";
$password ="";
$db = "book";

$conn = mysqli_connect("$servername","$username","$password","$db");

if($conn->connect_error){
   die("Connection failed:" . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO book (user_name,user_email,user_number,date,people)VALUES (?,?,?,?,?)");
$stmt->bind_param("ssiss",$user_name,$user_email,$user_number,$date,$people);

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_number = $_POST['user_number'];
$date = $_POST['date'];
$people = $_POST['people'];

if($stmt->execute() === TRUE){
   echo "Booking Successfully....";
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
<section class="contact" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
       <div class="heading6">Book  <span>A </span> Table</div>

       <p>For inquiries or assistance, please email us at info abhiscafe@gmail.com or call us at +(91)9825645872.
        <br> We're here to help you optimize your cafe operations.
       </p>
<form method="post">
       <input class="form-control" type="text" placeholder="Full Name" name="user_name" aria-label="default input example"><br>
       <input class="form-control" type="email" placeholder="Email" name="user_email" aria-label="default input example"><br>
       <input class="form-control" type="text" placeholder="Number" name="user_number" aria-label="default input example"><br>
       <input class="form-control" type="date" placeholder="Date" name="date" aria-label="default input example"><br>
       <input class="form-control" type="time" id="time" placeholder="Time" name="time" aria-label="default input example"><br>
       <div class="form-control">
        <label for="select1">No of People</label>

        <select name="people" id="">
            <option value="1">People 1</option>
            <option value="1">People 2</option>
            <option value="1">People 3</option>
        </select>

        
       </div>
       <button id="contact-btn" name="contact-btn" onclick="validateTime()">Book Now</button>
      </div>
</form>
      <div class="col-md-5" id="col1">
        <img src="./images/image6.png" alt="">
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
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
function validateTime(){
var selectTime = document.getElementById("time");
var selecthour = parseInt(selectTime.split(":")[0]);

if(selecthour < 9 || selecthour >= 17) {
alert ("Please select time between 9:00 AM to 5:00 PM");
return false;
} 
return true;
}
</script>

</body>
</html>