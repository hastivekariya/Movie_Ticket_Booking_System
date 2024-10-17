<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./logsign.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    
    <form method="POST">

        <label for="username">New Password</label>
        <input type="text" placeholder="Enter New Password" id="username" name="txtpass">

        <label for="password">Confirm Password</label>
        <input type="password" placeholder="Enter Confirm Password" id="password" name="txtcpass">

        <a href="forgotpass.php?del_id=<?php echo $user['id'];?>"><input type="submit" name="btnpass" style=color:white value="Save"></a>
        
      </form>
</body>
</html>


<?php
	$pdo = new PDO("mysql:host=localhost;dbname=case_Study","root","");
	if(isset($_POST['btnpass']))
	{
        
	}
  
?>
<?php
	if(isset($_GET['del_id']))
	{
		$id = $_GET['del_id'];
		$stmt = $pdo->prepare("DELETE from demo_master WHERE id = :id");
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		header('Location:demo_ins.php');		
	}
?>