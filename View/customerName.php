<?php

declare(strict_types=1);
require "../Model/Customer.php";
require "../Model/Product.php";

$customer = new Customer();
$product = new Product();

$name = $customer->getFirstName();
$productName = $product->getProductName();
$productPrice = $product->getPrice();
//$row = mysqli_fetch_assoc($name); 





?>

<label for="customer">Choose a customer: </label>
<select name="customer" id="customer">
    <option value="">
        <?php
        while ($row = mysqli_fetch_assoc($name)) {
        ?>
    <option value="">
        <?php
            echo $row['firstname'] .  " " . $row['lastname'];
            // var_dump($row);
        ?>
    </option>
    


<?php
        }
?>


</select>
<label for="customer">Choose the Productname </label>
<select name="product" id="product">
    <option value="">
        <?php
        while ($row = mysqli_fetch_assoc($productName)) {
        ?>
    <option value="">
        <?php
            echo $row['name'];
            //  var_dump($row);
        ?>
    </option>
  


<?php
        }
?>



</select>
</option>
<?php
        while ($row = mysqli_fetch_assoc($productPrice)) {
            $prices = (int)$row['price'];
            $priceInPennie = $prices/100;
            echo "<br>".$priceInPennie.  "<br> "; 
          
    }
?>

<?php require 'includes/footer.php' ?>