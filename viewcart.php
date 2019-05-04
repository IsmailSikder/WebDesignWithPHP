<!DOCTYPE html>
<html>
<head>
<title>Project Template - View Cart</title>
<link rel="icon" href="img/proj_template.png" type="image/png">
<link rel="stylesheet" type="text/css" href="css/proj_template.css" />
<script src="js/proj_tamplate.js" type="text/javascript"></script>
</head>

<body>
<?php session_start();
    include "readTable.php";
?>
    <div class="container">
            
        <header>
            <h1>Project Template Company Name</h1>
        </header>
            
        <nav>
        <ul>
                <li><?php echo '<a href="home.php">Home</a>' ?></li>
                <li><?php echo '<a href="products.php">Products</a>' ?></li>
                <li><?php echo '<a href="viewcart.php">View Cart</a>' ?></li>
                <li><?php echo '<a href="about.php">about</a>' ?></li>
            </ul>
        </nav>
            
        <article>

            <h1>View Cart</h1>
            <br>
         
                
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                ?>
            <form action="customerInfo.php" method="post">
            <table border="1" cellspacing="0" cellpadding="10" width="100%">
                 <tr>
                    <th class="left">Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                <?php
                $total = 0;
            
                        if (mysqli_num_rows($result)>0) {
                            // output data of each row
                            while($row=mysqli_fetch_array($result)) {
                                foreach($_SESSION["shopping_cart"] as $values){
                
                                    foreach ( $values as $key=> $final_val ){
                                if($row['id']==$final_val){
                                    ?>
                                    <td><?php echo $row['Name'];?></td>
                                    <td>1</td> 
                                    <td><?php echo "$".$row['price'];?></td> 
                                    <?php $total=$total+$row['price'];?>
                                   <?php
                                }

                        ?>
                        <tr>                
                        </tr>
                    <?php
                            }
                        } 
                    }

                }
                ?>
                <td></td>
                 <td>Total</td>
                 <td><?php echo "$".$total;?> </td>

                  </table>
            <input type="submit" value="checkout">
            </form>
                <?php

            }
                else{
                ?>
                    <h2>Your Cart is empty</h2>
                    <?php
                    }

            $_SESSION["total"] = $total;
        ?>
        <br>
            
<!-- Only show table if there are products in cart -->
            
        </article>
        <br>
        
        <footer>Copyright © Ismail Sikder</footer>
            
    </div>
</body>

</html>
