<?php

require "database.php";



class Product{
private int $id;
private string $productName;
private int $price;
private $output1;

public function __construct(){
    global $connection;
    $query = "SELECT * FROM product";
    $this->output1 = mysqli_query($connection, $query);
    

    if(!$this->output1) {
        die("Query is failed " . mysqli_error($connection));
    }


 }
 public function getId() : int{
    global $connection;
       
    $id ="SELECT id FROM product";
    return $output1 = mysqli_query($connection, $id);
    $name =mysqli_fetch_all($output1, MYSQLI_ASSOC);
    return $id;
 }
 public function getProductName(){
    global $connection;
       
    $id ="SELECT name FROM product";
    return $output1 = mysqli_query($connection, $id);
    $name =mysqli_fetch_all($output1, MYSQLI_ASSOC);
    return $name;
 }
 public function getPrice() : int{
    global $connection;
    $id ="SELECT price FROM product";
    return $output1 = mysqli_query($connection, $id);
    $name =mysqli_fetch_all($output1, MYSQLI_ASSOC);
    return $name;
 }


}

?>

