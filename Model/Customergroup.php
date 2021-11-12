<?php

include "Model\database.php";


class CustomerGroup{
    private int $id;
    private string $name;
    private int $parentid;
    private int $fixedDiscount;
    private int $variableDiscount;


    public function __construct(int $id, string $name, int $parentid, int $fixedDiscount, int $variableDiscount){
        
        global $connection;
        $query = "SELECT * FROM customer_group";
        $output = mysqli_connect($connection, $query);
    
        if('!$output') {
            die("Query is failed".mysqli_error($connection));
        }
        
        $this->id = $id;
        $this->name =$name;
        $this->parentid = $parentid;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;


    }

    public function getId(){
        return $this->id;

    }
    public function getName(){
        return $this->name;

    }
    public function getVariableDiscount(){
        return $this->vaiableDiscount;

    }
    public function getFixedDiscount(){
        return $this->fixedDiscount;

    }
    public function getParentId(){
        return $this->parentid;

    }
}