<?php


// require "Model\Customer.php";

// $customer = new Customer();
// $name= $customer->getFirstName();
// $row = mysqli_fetch_assoc($name);

require "../Model/database.php";
$query = "SELECT * FROM customer";
        $output = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($output);

      
    
?>

<label for ="customer" >Choose a customer: </label>
    <select name = "customer" id = "customer">
        <option value = "">
            <?php
        while ($row = mysqli_fetch_assoc($output)) {
        ?>
            <option value="">
                <?php
                echo $row['firstname'] .  " " . $row['lastname'];
                ?>
            </option>


        <?php
        }
        ?>

            
        </select>
        </option>

