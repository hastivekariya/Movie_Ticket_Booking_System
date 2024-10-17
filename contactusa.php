<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
body{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  background: linear-gradient(106.5deg, rgba(255, 215, 185, 0.91) 23%, rgba(223, 159, 247, 0.8) 93%);
  background-size: cover;
  background-position: center;
    }
    form
    {
      background: radial-gradient(329px at 3.1% 9.3%, rgb(251, 204, 235) 28.1%, rgba(221, 221, 221, 0.15) 100.7%);
  
    }
.wrapper{
  width: 715px;
  background: radial-gradient(329px at 3.1% 9.3%, rgb(251, 204, 235) 28.1%, rgba(221, 221, 221, 0.15) 100.7%);
  border-radius: 5px;
  box-shadow: 10px 10px 10px rgba(0,0,0,0.05);
}
.wrapper header{
  font-size: 22px;
  font-weight: 600;
  padding: 20px 30px;
  border-bottom: 1px solid #ccc;
}
.wrapper form{
  margin: 35px 30px;
}
.wrapper form.disabled{
  pointer-events: none;
  opacity: 0.7;
}
form .dbl-field{
  display: flex;
  margin-bottom: 25px;
  justify-content: space-between;
}
.dbl-field .field{
  height: 50px;
  display: flex;
  position: relative;
  width: calc(100% / 2 - 13px);
}
.wrapper form i{
  position: absolute;
  top: 50%;
  left: 18px;
  color: #ccc;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
}
form .field input,
form .message textarea{
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 18px 0 48px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.field input::placeholder,
.message textarea::placeholder{
  color: #ccc;
}
.field input:focus,
.message textarea:focus{
  padding-left: 47px;
  border: 2px solid #0b0c0d;
}
.field input:focus ~ i,
.message textarea:focus ~ i{
  color: #0b0c0d;
}
form .message{
  position: relative;
}
form .message i{
  top: 30px;
  font-size: 20px;
}
form .message textarea{
  min-height: 130px;
  max-height: 230px;
  max-width: 100%;
  min-width: 100%;
  padding: 15px 20px 0 48px;
}
form .message textarea::-webkit-scrollbar{
  width: 0px;
}
.message textarea:focus{
  padding-top: 14px;
}
form .button-area{
  margin: 25px 0;
  display: flex;
  align-items: center;
}
.button-area button{
  color: #fff;
  border: none;
  outline: none;
  font-size: 18px;
  cursor: pointer;
  border-radius: 5px;
  padding: 13px 25px;
  background: #0b0c0d;
  transition: background 0.3s ease;
}
.button-area button:hover{
  background: #0b0c0d;
}
.button-area span{
  font-size: 17px;
  margin-left: 30px;
  display: none;
}
@media (max-width: 600px){
  .wrapper header{
    text-align: center;
  }
  .wrapper form{
    margin: 35px 20px;
  }
  form .dbl-field{
    flex-direction: column;
    margin-bottom: 0px;
  }
  form .dbl-field .field{
    width: 100%;
    height: 45px;
    margin-bottom: 20px;
  }
  form .message textarea{
    resize: none;
  }
  form .button-area{

    margin-top: 20px;
    margin-bottom: 20px;
    flex-direction: column;
  }
  .button-area button{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
  }
  .button-area span{
    margin: 20px 0 0;
    text-align: center;
    height: 10;


  }


header{
  position: relative;
  top: 0;
  width: 100%;
  padding: 30px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header .logo{
  position: relative;
  color: #e0e0e0;
  font-size: 40px;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 1px;
}

header .navigation a{
  color: #ffffff;
  font-size: 20px;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s ease;
  transition-property: background;
}

}
</style>
<body>

<header>
        <a href="movie.php">
        <img src="back1.jpg" name="backbtn" width="50px" height="30px">
        </a>
           
           </div>
        </header>
        <center>

        <div class="wrapper">
          <header>Send us a Message & ContactUs</header>
          <form action="contactusa.php" method="POST">

            <div class="dbl-field">
              <div class="field">
                <input type="text" name="txtname" placeholder="Enter your name" >
                <i class='fas fa-user'></i>
              </div>


              <div class="field">
                <input type="email" name="txtemail" placeholder="Enter your email">
                <i class='fas fa-envelope'></i>
              </div>
            </div>

            <div class="dbl-field">
              <div class="field">
                <input type="number" name="txtphone" placeholder="Enter your phone" >
                <i class='fas fa-phone-alt'></i>
              </div>
              <div class="field">
                <input type="text" name="txtsub" placeholder="Enter your subject">
                
                <i class='fas fa-globe'></i>
              </div>
            </div>

            <div class="message">
              <textarea placeholder="Write your message" name="txtmessage" maxlength="500"></textarea>
              <i class="material-icons">message</i>
            </div>

            <div class="button-area">
              <button type="submit" name="btn">Send Message</button>


            </div>
            
            </center>
          </form>
        </div>
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
  <script>
    <?php
      if(isset($_POST['btn'])) {
        echo 'alert("Thank you for your response!");';
      }
    ?>
  </script>
</body>
</html>

<?php

      $pdo=new PDO("mysql:host=localhost;dbname=case_study","root","");
      if(isset($_POST['btn']))
      {
        $nm=$_POST['txtname'];
        $email=$_POST['txtemail'];
        $phone=$_POST['txtphone'];
        $sub=$_POST['txtsub'];
        $mess=$_POST['txtmessage'];
      }
        if (!empty($nm) && !empty($email) && !empty($phone) && !empty($sub) && !empty($mess)) {
        $stmt = $pdo->prepare("insert into contact_us(name,email,phone,subject,message)values(:nm,:email,:phone,:sub,:mess)");

        $stmt->bindParam(':nm',$nm);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':phone',$phone);
        $stmt->bindParam(':sub',$sub);
        $stmt->bindParam(':mess',$mess);
        $stmt->execute();
      }
    

?>