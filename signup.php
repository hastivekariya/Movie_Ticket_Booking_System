<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" href="./logsign.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    
    <form method="POST">
        <h3>Signup</h3>

        <label for="username">Email</label>
        <input type="text" placeholder="Email" id="username" name="txtemail">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="txtpass">

        <label for="confirm password">Confirm Password</label>
        <input type="password" placeholder=" Confirm Password" id="cpassword" name="txtcpass">

        <button class="Center-btn" name="btnsp" style=color:white >Sign Up</button>
         
       <center>
         <br>
          <div class="signup">
            You have account?
            <a href="./login.php">Login Now</a>
         </div>
       </center>
      </form>
</body>
</html>


<?php
	$pdo = new PDO("mysql:host=localhost;dbname=case_Study","root","");
	if(isset($_POST['btnsp']))
	{
		$s_email = $_POST['txtemail'];
		$s_pass = $_POST['txtpass'];
    $c_pass = $_POST['txtcpass'];
		$stmt = $pdo->prepare("Insert into sign_up (email,Password,c_password) values(:s_email,:s_pass,:c_pass)");
		$stmt -> bindParam(':s_email',$s_email);
		$stmt -> bindParam(':s_pass',$s_pass);
    $stmt -> bindParam(':c_pass',$c_pass);
		$stmt -> execute();
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $password = $_POST["txtpass"];
      $con_password = $_POST["txtcpass"];
  
      if ($password == $con_password) {
        header("Location: index.php");
          exit();
      } else {
        echo '<script>alert("Invalid Password & Confirm Password ")</script>'; 
          exit();
      }
  }
	}
  
?>