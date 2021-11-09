<?php


require "../Model/Customer.php";

$customer = new Customer();
$name= $customer->getFirstName();
$lName= $customer->getLastName();
//$row = mysqli_fetch_assoc($name);

require "../Model/database.php";



?>

<label for="customer">Choose a customer: </label>
<select name="customer" id="customer">
    <option value="">
        <?php
        while ($row = mysqli_fetch_assoc($name)) {
        ?>
    <option value="">
        <?php
            echo $row['firstname'].  " " . $row['lastname'];
            // var_dump($row);
        ?>
    </option>
    <!-- .  " " . $row['lastname' -->


<?php
        }
?>


</select>
</option>