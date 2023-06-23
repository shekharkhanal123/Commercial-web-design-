<?php
if(isset($_POST["btn"]))
 {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pass=$_POST['password'];
    $conn=mysqli_connect("localhost","root","","library");
    $query= "INSERT INTO members(User_Name,email,phone_number,pass)VALUES('$name','$email',$phone,'$pass')";
    $ans=mysqli_query($conn,$query);
    if($ans=true)
    {
        echo"done";
    }
    else
    {
        echo"not done";
    }
    
}
?>
<!-- <script type="text/javascript">
     alert("Registration Successful.....You may login now.")
  //    window.location.herf="loginpage.php";
</script> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
<link rel="stylesheet" href="signup.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <header>
      <h2 class="logo">Management System</h2>
      <nav class="Navigation">
          <a href="index.php">Home</a>     
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Contact</a>
      </nav>
      <a class="btnLogin-popup" href="index.php">Back</a>
  </header>
  <div class="wrapper">
    <!-- <span class="icon-close" ><ion-icon name="close-circle"></ion-icon></span> -->
    <div class="form-box register">
        <h2>Signup</h2>
        <form action ="#" method="POST">
        <div class="input-box">
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <input type="text" name="name" required>
            <label>Username</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" name="email" required>
            <label>Email</label>
            </div>
        <div class="input-box">
                <span class="icon"><ion-icon name="phone"></ion-icon></span>
                <input type="text" name="phone" required>
                <label>Phone</label>
        </div>
        <div class="input-box">
        <input type="password" name="password" required>
        <label>Create Password</label>
        </div>
        <!-- <div class="input-box">
            <input type="password" name="p2" required>
            <label>Confirm Password</label>
            </div> -->
        <div class="remember-forgot">
          <label><input type="checkbox">I agree to the terms & conditions.</label>
             
             </div>
            
            <button type="submit" class="btn" name="btn">signup</button> 
            <div class="login-register">
             <p>Already have an account? <a href="login.php" class="register-link">Login</a></p>
             </div>
        </form>
    </div>
    </div>
    <script type="module"  src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="app.js"></script>    
</body>
</html>