<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style1home.css">
    <link rel="stylesheet" href="./logsign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <style>
      
      * {
        box-sizing: border-box;
      }
      
      .hall-text{
        font-family: Lucida Handwriting;
        display: flex;
        font-weight: 800;
        font-size: 30px;
        color: aliceblue;
        justify-content: center;
      }
      .row {
        display: flex;
      }
      
      /* Create three equal columns that sits next to each other */
      .column {
        flex: 33.33%;
        padding: 5px;
        overflow: hidden;
        
      }
      .column img {
  width: 100%;
  box-shadow: 2px 3px 5px rgba(255, 255, 255, 0.5);
  /* border: 20px solid #000000; */
   }

   /* Zoom In #1 */
   .row .column img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.row .column:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}


      </style>
  </head>
  <body>

    <section>
      <header>

        <h2 class="Logo Logo-animation">
          <span class="Logo-word Logo-word-1"></span>
        </h2>

        <div class="navigation">
          <a href="movie.php">Movies</a>
          <a href="About.php">AboutUs</a>
          <a href="Contactusa.php">Contact Us</a>
         </div>
      </header>
      <br><br><br><br><br><br><br>
      <div class="hall-text">
    <H1 class="Logo Logo-animation">UPCOMING MOVIES</H1>
    </div>
    <CENTER>
<table>
<tr class="row">
<tr>
  <td class="column">
    <img src="./up1.jpg" alt="1" width=100% height=400px>
   <a href="https://www.youtube.com/watch?v=yXkET4HsTwo"><input type="submit" value="WATCH TRAILOR" name="btn1"  style="font-weight:bold"></a>
</td>
  <td class="column">
    <img src="./up2.jpg" alt="2" width=100% height=400px>
    <a href="https://www.youtube.com/watch?v=wsUhTestLv0"><input type="submit" value="WATCH TRAILOR" name="btn2" style="font-weight:bold"></a>
  </td>
  <td class="column">
    <img src="./up3.jpg" alt="3"  width=100% height=400px>
    <a href="https://www.youtube.com/watch?v=LIq144fT4c4"><input type="submit" value="WATCH TRAILOR" name="btn3" style="font-weight:bold"></a>
</td>
</tr>
</table>
</CENTER>
    </section>

<!-- footer -->
    <footer>
      <div class="container">
        <div class="footer-logo">FlixTix
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