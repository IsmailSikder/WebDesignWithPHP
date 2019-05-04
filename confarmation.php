<!DOCTYPE html>
<html>
<head>
	<title>Submission</title>
	<style>
      body
      {
          font-family: Arial;
          background-color: rgb(220, 240, 255);
          color: rgb(40, 90, 140);
      }
	  </style>
</head>

<body>
  <h2>Your Purchase has been finalize!</h2>
	<?php
        session_start();
        echo "Thank you, " . $_POST['Fname']." ". $_POST['Lname'].", For shopping with us"."<br>";
        echo "Your total is $".$_SESSION["total"] . "<br>";
        echo "Your Confarmation ID: ". session_id();
        unset($_SESSION['cart']);
        $_SESSION=array();
        session_desrtoy();

        
        
?>

</body>
</html>
