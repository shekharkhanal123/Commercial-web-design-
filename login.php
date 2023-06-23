<?php
 session_start();
 if(isset($_SESSION['is_login']) == true){
    header('Location:index.php');
 }
if(isset($_POST["btn"]))
   {
   
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $conn=mysqli_connect("localhost","root","","library");
    $query="SELECT * FROM members WHERE email='$email' ";
    $ans=mysqli_query($conn,$query);
    while($row= mysqli_fetch_assoc($ans))
    {
      
        if($row['email']=$email)
        {
            if($row['password']=$pass)
            {
                echo"login successful";
                $_SESSION['is_login'] = true;
                $_SESSION['email'] = $email;
                header('Location:index.php');
            }
            else{
                echo"incorrect pass";
            }
        }
        else{
            echo"incorrect email";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title> login & Registration</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <header>
            <h2 class="logo">Management System</h2>
            <nav class="Navigation">
                <a href="index.html">Home</a>     
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </nav>
            <a class="btnLogin-popup" href="index.php">Back</a>
        </header>
        <div class="wrapper">
            <!-- <span class="icon-close"><ion-icon name="close-circle"></ion-icon></span> -->
                <div class="form-box login">
                <h2>Login</h2>
                <form action ="#" method="POST">
                <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email"  class="email" name="email" required>
                <label>Email</label>
                </div>
                <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" class="password" name="password" required>
                <label>Password</label>
                </div>
                <div class="remember-forgot">
                  <label><input type="checkbox">Remember me</label>
                     <a href="#">Forgot password</a>
                     </div>
                    
                    <button type="submit" class="btn" name="btn">Login</button> 
                    
                    <div class="login-register">
                     <p>Don't have an account? <a href="signup.php" class="register-link">signup</a></p>
                     </div>
                </form>
               
            </div>
        </div>
        <script src="form.js"></script>
        <script type="module"  src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
<?php
if(isset($GET['btn']))
{
   $email=$_post['e1'];
   $pass=$_post['pass'];
   $conn=mysqli_connect("localhost","root","","management_system");
   $query="SELECT * FROM user_info WHERE Email='$email' ";
   $ans=mysqli_query($conn,$query);
   while($row= mysqli_fetch_assoc($ans))
   {
       if($row['Email']=$email)
       {
           if($row['password']=$pass)
           {
               echo"login successful";
           }
           else{
               echo"incorrect pass";
           }
       }
       else{
           echo"incorrect email";
       }
   }
}
?>
