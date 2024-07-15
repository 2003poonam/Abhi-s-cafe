<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_pass = $_POST["user_pass"];
    $user_confpass = $_POST["user_confpass"];
// New field for confirm password
    

    // Check if passwords match
    if ($user_pass !== $user_confpass) {
        echo "<script>alert('Password do not match');</script>";
    } else {
        // Connect to MySQL (replace dbname, dbuser, dbpass with your MySQL details)
        $conn = new mysqli("localhost", "root", "", "registration");
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Insert user data into database
        $sql = "INSERT INTO register (user_name, user_email,user_pass,user_confpass) VALUES ('$user_name', '$user_email','$user_pass', '$user_confpass')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
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
<style>

</style>
<body>
  <div class="reg-content">
   <div class="container">
    <div class="row">
      <div class="col-md-7">
         <div class="register">
       <div class="heading7">Register <span>Here</span></div>
<form method="post">
   <div class="form">
       <input class="form-control" type="text" placeholder="Name" aria-label="default input example" name="user_name" required><br>
       <input class="form-control" type="email" placeholder="Email" aria-label="default input example" name="user_email"required><br>
       <input class="form-control" type="password" placeholder="Password" aria-label="default input example" name="user_pass" required><br>
        <input class="form-control" type="password" id="confirm_password" name="user_confpass" placeholder="Confirm password" required>
       <button id="reg-btn" name="register-btn">Register Here</button>
       <p class="reg-text">Already have an account? <a href="login.php"> Login Here</a></p>
       </div>
       </form>
      </div>
      </div>
    </div>
  </div>  
</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>