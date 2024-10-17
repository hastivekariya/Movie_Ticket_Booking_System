<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlixTix</title>
    <link rel="stylesheet" href="./style1home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>

    <section>
      <header>
        <a href="home.php">
        <img src="back1.jpg" name="backbtn" width="50px" height="30px">
        </a>
           
           </div>
        
        <div class="navigation">

          <a href="movie.php">Movies</a>
          <a href="About.php">AboutUs</a>
          <a href="Contactusa.php">Contact Us</a>
         </div>
      </header>
     <br><br><br><br><br>
     <center>
<div class="hall-text">
    <H1 class="Logo Logo-animation"> LATEST MOVIES</H1>
    </div>
  </center> 
   
   
    <marquee behavior="scroll" direction="left">

    <img src="./m1.jpg" alt="1"  height=250px>
    <img src="./m2.jpg" alt="1" height=250px>
    <img src="./m3.jpg" alt="3" height=250px>
    <img src="./m4.jpg" alt="4" height=250px>
    <img src="./m5.jpg" alt="4" height=250px>
    <img src="./m6.jpg" alt="4" height=250px>
    <img src="./m7.jpg" alt="4" height=250px>
    <img src="./m8.jpg" alt="4" height=250px>
    <img src="./m9.jpg" alt="4" height=250px>
    <img src="./m10.jpg" alt="4" height=250px>


</marquee>
  </select><br><br><br>
  <center>
  <form method="POST">
<input type="submit" name="btnbook" style="color:black;background-color:lightpink;font-weight:30px;font-family:cursive;font-size:20px" value="Book Now">
</form>
</center>
<br><br><br><br>  
    <!-- footer -->
    <footer>
      <div class="container">
        <div class="footer-logo">Flix Tix
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
  if(isset($_POST['btnbook']))
  {
    header('location:booking.php');
  }


?>