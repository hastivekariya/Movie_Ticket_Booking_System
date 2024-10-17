<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

    <section>
      <form action="index.php" method="POST">
      <header>
        
        <h2 class="Logo Logo-animation">
          <span class="Logo-word Logo-word-1">Flix Tix</span>
        </h2>
        
        <div class="navigation">
         
        <button class="Center-btn" name="btnlog">Log In</button>
        <button class="Center-btn" name="btnsign">Sign Up</button>
         </div>
      </header>
</form>
      <div class="Center-text">
        <h1><BR><BR>
          <span>"YOUR </span>
          <span>TICKET TO </span>
          <span>EXPLORE.</span>
          <br>
          <span>EXPERIENCE</span>
          <span>THE WORLD, ONE RESERVATION AT A TIME."🎟️🌎</span>
        </h1>
      
    </div>

    </section>

<!-- footer -->
    <footer>
      <div class="container">
        <div class="footer-logo">Flix Tix
        </div>
        <div class="footer-links">
        </div>
        <div class="footer-social">
          <ul>
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
          </ul>
        </div>
        <div class="footer-text">
          <p>&copy; 2024 My Website</p>
        </div>
      </div>
    </footer>
    
  </body>
</html>

<?php
  if(isset($_POST['btnlog']))
  {
    header('location:login.php');
  }
  if(isset($_POST['btnsign']))
  {
    header('location:signup.php');
  }
?>