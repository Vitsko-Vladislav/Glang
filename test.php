<?php 

$email = $_POST['email'];
$password = $_POST['password'];

   if( strip_tags($_POST['email'])&&
    filter_var($email, FILTER_VALIDATE_EMAIL)){*/
        $password =strip_tags($_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $mysqli = mysqli_connect("localhost","root","","mydata");
        $querty= mysqli_query($mysqli,"INSERT INTO test_one(email,password)
 VALUES ('$email','$password')");


   
    
   
   


