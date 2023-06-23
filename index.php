<?php  session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <header>
      <h2 class="logo">Management System</h2>
      <nav class="Navigation">
          <a href="#">Home</a>     
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Contact</a>
      </nav>
      <?php
      if(isset($_SESSION['email'])){
        echo $_SESSION['email'];
      }else{ ?>
 <a class="btnLogin-popup" href="signup.php">Signup</a>
 <a class="btnLogin-popup" href="login.php">login</a>
    <?php  }
      ?>
     
  </header>
    <section class="home" id="home" >
        <div clss="home-text container">
            <h2 class="home-title">LIBRARY MANAGEMENT</h2>
        </div>
    </section>
    <div class="post-filter container">
        <span class="filter-item active-filter"data-filter='a11'>All</span>
        <span class="filter-item" data-filter='places'>places</span>
        <span class="filter-item" data-filter='contacts'>contacts</span>
    </div>
     <section class="post container">
    <div class="post-box">
    <img src="annapurna.jpg" alt="" class="post-img">
    <h2 class="category"> ABC CAMPS</h2>
    <a href="post-page.html " class="post-title">
    
    </a>
    <p class="post-description"> trekking grna majja aauxa</p>
    <div class="profile">
        <img src="img/profile-1.jpg " alt=""class="profile-img"> 
        <!-- chai photo halna paro -->
        


    </div>

    </div>
    <div class="post-box">
        <img src="#" alt="#"lass="post-img">
        <h2 class="category"> POKHARA</h2>
        <a href="post-page.html " class="post-title">
        pokharaaa
        </a>
        <p class="post-description"> aha kati ramailo</p>
        <div class="profile">
            <img src="img/profile-1.jpg " alt=""class="profile-img">
            <!-- chai photo halna paro -->
            
    
    
        </div>
    </div>
        <div class="post-box">
            <img src="img/post-2.jpg" alt="" class="post-img">
            <h3 class="category"> Mobile</h3>
            <a href="post-page.html " class="post-title">
            kathmandu
            </a>
            <p class="post-description">ramro xa ramro</p>
            <div class="profile">
                <img src="img/profile-1.jpg " alt=""class="profile-img"></yesma chai photo halna paro>
                
        
        
            </div>
     </section>
     
  <footer>
    &copy; 2023 Web Page Interface. All rights reserved.
  </footer>
  <p align="center">/<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
  /<br>
</p>
</body>
</html>