<?php

include "Model\database.php";

class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $groupId;
    private int $fixedDiscount;
    private int $variableDiscount;


    public function __construct(int $id, string $firstName, string $lastName, int $groupId, int $fixedDiscount, int $variableDiscount)
    {
        global $connection;
        $query = "SELECT * FROM customer";
        $output = mysqli_connect($connection, $query);

        if('!$output') {
            die("Query is failed".mysqli_error($connection));
        }

        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
         $this->getId();
    }

    public function getId(){
        global $connection;
        $this->firstName;
        $firstName ="SELECT * FROM Customer";
        return $output = mysqli_query($connection, $firstName);
        $name =mysqli_fetch_all($output, MYSQLI_ASSOC);
        return $name;

    }

    public function getFirstName()
    {

        return $this->firstName;
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
