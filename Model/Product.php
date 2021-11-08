<?php

#include "Model\database.php";


class Product{
private int $id;
private string $name;
private int $price;

public function __construct(int $id , string $name , int $price){
    global $connection;
    $query = "SELECT * FROM customer";
    $output = mysqli_connect($connection, $query);

    if('!$output') {
        die("Query is failed".mysqli_error($connection));
    }

     $this->id = $id;
     $this->name = $name;
     $this->price = $price;
 }
 public function getId() : int{
     return $this->id;
 }
 public function getName() : string{
     return $this->name;
 }
 public function getPrice() : int{
     return $this->price;
 }


}

?>

