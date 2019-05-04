<!DOCTYPE html>
<html>
<head>
<title>Project Template - Products</title>
<link rel="icon" href="img/proj_template.png" type="image/png">
<link rel="stylesheet" type="text/css" href="css/proj_template.css" />
<script src="js/proj_tamplate.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

<?php 
include "readTable.php";
 session_start();
 
 if(isset($_POST["add_to_cart"])){
     if(isset($_SESSION["shopping_cart"]))
        {
         $product_array_id = array_column($_SESSION["shopping_cart"],"item_id");
         if(!in_array($_GET["id"], $product_array_id))
         {
            $count =count($_SESSION["shopping_cart"]);
            $product_array=array(
                 'item_id' => $_GET['id']
               
             );
             $_SESSION["shopping_cart"][$count]=$product_array;
         }
         else
         {
                    echo "Already added";
         }

     }
     else{
         $product_array=array(
             'item_id'=>$_GET['id']
         );
         $_SESSION["shopping_cart"][0]=$product_array;
     }
 }

 ?>
<div class="container">
            
            <header>
                <h1>Electronics Supply</h1>
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
    <h1>Products</h1>
    <?php
  
   if (mysqli_num_rows($result)>0) {
   
    while($row=mysqli_fetch_array($result)) {
                     
        ?>
            <div class="products_container">
                <form method="post" action="products.php?action=add&id=<?php echo $row["id"];?>" >
                    <div class="product">
                    
                        <img src="<?php echo $row["image"];?>" height="100" width="100">
                
                            <br><?php echo $row["Name"]."<br>". "$".$row["price"].'<br>'; ?> 
                        <input type="submit" name="add_to_cart" value="AddToCart">

                    </div>
                </form>
            </div>
<?php
      }
} else {
    echo "0 results";
}

?>
</article>     
<footer>Copyright © Ismail Sikder</footer>
</div>
</body>

</html>
