<?php

$connection = mysqli_connect("localhost", "root", "","pricecalculator");
if(!$connection){
    die("Database connection is failed");
}


if(isset($_POST["username"])){

    $uname=$_POST["username"];
    $password=$_POST["password"];
    $username="";
    $pass="";
   
     $sql="SELECT * FROM customer where firstname='".$uname."' AND lastname='".$password."' limit 1";
   

     $result = $connection->query($sql);
     
                
            while ($row = $result->fetch_assoc()) {
                  $username = $row["firstname"];
                  $pass = $row["lastname"];

                
                
             }

     
    

    if($uname == $username && $password == $pass){
       
        header("Location: ../index.php");
        exit();
    }
    else{
        echo "You have enetered wrong username/password";
    }


}

?>




<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="..\css\style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>

	<div class="container">
    <!-- <i class="test"></i> -->
	<img src="..\images\loginMF.png"/>
		<form method="POST">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>