<?php

require "../Model/database.php";



class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $groupId;
    private int $fixedDiscount;
    private int $variableDiscount;



$query = "SELECT * FROM customer";
        $output = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($output);

        var_dump($row);

    public function __construct()
    {

        
        global $connection;
        $query = "SELECT * FROM customer";
        $output = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($output);
    
        if(!$output) {
            die("Query is failed " . mysqli_error($connection));
        }

        // $this->id = $id;
        // $this->firstName = $firstName;
        // $this->lastName = $lastName;
        // $this->groupId = $groupId;
        // $this->fixedDiscount = $fixedDiscount;
        // $this->variableDiscount = $variableDiscount;
        
    }

    public function getId(){
        global $connection;
        $this->id;
        $id ="SELECT * FROM Customer";
        return $output = mysqli_query($connection, $id);
        $name =mysqli_fetch_all($output, MYSQLI_ASSOC);
        return $name;

    }

    public function getFirstName()
    {
        global $connection;
        $this->id;
        $id ="SELECT firstname FROM Customer";
        return $output = mysqli_query($connection, $id);
        $name =mysqli_fetch_all($output, MYSQLI_ASSOC);
        return $name;
    }

    public function getLastName()
    {

       return $this->lastName;
    }

    public function getGroupId()
    {

       return $this->groupId;
    }

    public function getFixedDiscount()
    {

       return $this->fixedDiscount;
    }

    public function getVariableDiscount()
    {

       return $this->variableDiscount;
    }
}
