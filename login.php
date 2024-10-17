<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" href="./logsign.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <form action="login.php" method="POST">
        <h3>Login</h3>
            <label for="username">Mobile Number</label>
            <input type="number" name="txtmname" placeholder="Phone" id="username">

            <label for="password">Password</label>
            <input type="password" name="txtpass" placeholder="Password" id="password"  title="Password must be at least 8 characters long, contain at least one letter and one number.">

            <button class="Center-btn" name="btnl" style="color:white">Log In</button>
            <center>
                <br>
                <div class="signup">
                    Don't have an account?
                    <a href="./signup.php">Signup Now</a>
                </div>
            </center>
        </form>
    </body>
</html>
<?php
	$pdo = new PDO("mysql:host=localhost;dbname=case_study","root","");
	if(isset($_POST['btnl']))
	{
		$nm = $_POST['txtmname'];
		$ct = $_POST['txtpass'];
		$stmt = $pdo->prepare("Insert into login_data (mobile,Password) values(:mobile,:Password)");
		$stmt -> bindParam(':mobile',$nm);
		$stmt -> bindParam(':Password',$ct);
		$stmt -> execute();
		
		header('Location:home.php');
	}
?>
<?php
    if(isset($_POST['btnl']))
    {
        $un1=$_POST['txtmname'];
         $pass=$_POST['txtpass'];
        setcookie("username",$un1,time() + 10800);
       setcookie("password",$pass,time() + 10800);
    }
    
?>



