<?php 
if($_POST['email']&& $_POST['password'] != "" || NULL)
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    //Добавить исключение для повторяющихся емейлов
       if( strip_tags($_POST['email'])&&
        filter_var($email, FILTER_VALIDATE_EMAIL)){
            $password =strip_tags($_POST['password']);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $mysqli = mysqli_connect("localhost","root","","mydata");
            $querty= mysqli_query($mysqli,"INSERT INTO test_one(email,password)
     VALUES ('$email','$password')");
     mysqli_close($mysqli);
     setcookie('usrname',$name,time()+3600);
     
     header("Location: userpage.php");
        }
        else{
            header("Location: test-2.php");
        }
    
}
else{
    header("Location: test-2.php");
}


   
    
   
   


