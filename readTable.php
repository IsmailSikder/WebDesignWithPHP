<?php
include "sqlConnect.php";
    $sql = "SELECT * FROM products ORDER BY id ASC";
   // $result = $conn->query($sql);
   $result = mysqli_query($conn,$sql);
   
?>