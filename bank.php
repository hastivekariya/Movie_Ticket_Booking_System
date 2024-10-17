<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./logsignforbank.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body
        {
            background: linear-gradient(106.5deg, rgba(255, 215, 185, 0.91) 23%, rgba(223, 159, 247, 0.8) 93%);

        }
    </style>
</head>
<body>
    <?php 
        if(isset($_SESSION['status']))
        {?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey !</strong> <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            unset($_SESSION['status']);
        }

    ?>
    <form action="bank.php" method="POST">
        <h3>Payment</h3>

        <label for="cumber">ENTER CARD NUMBER</label>
        <input type="number" name="txtcname" placeholder="card number" id="cnumber" title="maximum length of a credit card number is 19 digits">

        <label for="date">EXPIRY DATE</label>
        <input type="date" name="date" placeholder="date">

        <label>CVV</label>
	    <input type="text" id="cvv"  title=" CVV code is 4 digits long"><br><br>
        <input type= "submit" class="Center-btn" name="btnl" style="color:white;background-color:lightgrey;font-weight:20px" value="Success">
      </form>
</body>
</html>

<?php
if(isset($_POST['btnl']))
{
  header('location:demo.php');
}

?>


