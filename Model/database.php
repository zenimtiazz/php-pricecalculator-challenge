<?php

$connection = mysqli_connect("localhost", "roor", "","pricecalculator");
if(!$connection){
    die("Database connection is failed");

}