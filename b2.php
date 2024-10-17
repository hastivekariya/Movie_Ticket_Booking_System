<?php

    session_start();
    $totalPrice = 0;
    $pricePerSeat = 300;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seats = (int)$_POST['txtnumber'];
    

    if ($seats == 1) {
        $totalPrice = $pricePerSeat;
    } else {
        $totalPrice = $pricePerSeat * $seats;
    }
}
  if(isset($_POST['btnsp']))
  {
    $_SESSION['status'] = "Under Processing";
    header('location:bank.php');
  }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style1home.css">
    <link rel="stylesheet" href="./logsignbooking1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
    <style>
    
    select {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #f7f7f7; 
      color: #333; 
    }

  
    option {
      background-color: #f7f7f7; 
      color: #333; 
    }

    option:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>       
    <section>
        <form method="POST">
            <h2>BOOK YOUR SEAT</h2>
            <label for="mySelect">ADD MOVIE:</label>
            <select id="mySelect">
            <option value="option1">SELECT</option> 
            <option value="option2">WALK ALONE</option>
            <option value="option3">YODHA</option>
            <option value="option4">SHAITAAN</option>
            <option value="option5">OYE BHOLE OYE</option>
            <option value="option6">BHOLAA</option>
            <option value="option7">ARTICLE 370</option>
</select>
            <!-- <label for="username">Select Time</label> -->
            <input type="radio" name="r1" value="15:00PM">15:00PM
            <input type="radio" name="r1" value="16:00PM">17:00PM

            <label>Select Seat</label>
            <input type="number" name="txtnumber">

            <label>Select Date</label>
            <input type="date" name="txtdate">

            <label>Payment</label>
            <input type="text" id="payment" name="payment" value="<?php echo isset($totalPrice) ? $totalPrice : ''; ?>" readonly>
            <br>
            <input type="submit" name="btn" style="color:white;background-color:lightgrey;font-weight:20px" value="Done">

            <input type="submit" name="btnsp" style="color:white;background-color:lightgrey;font-weight:20px" value="Confirm Seat">
        </form>
    </section>
</body>
</html>
