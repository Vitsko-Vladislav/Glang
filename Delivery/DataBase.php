<?php
class DataBase{
   /* private $title = $_POST['title'];
    private $author = $_POST['user']; */
    private $hostname = "localhost";
    private $usrname = "root";
    private $basepassword = "";
    private $basename = "mydata";
    
    
    private function insArt(/*Прописать аргументы*/){
        $mysqli = new mysqli($this->hostname,$this->usrname,
                             $this->basepassword,$this->basename);
        $res = $mysqli->query("INSERT INTO articles(title,text,author) 
                       VALUES('title','text','author')");
        if($res){
            header("location:review.html");
            $mysqli->close();
        }
        elseif(!$res){
            header("location:form.html");
            $mysqli->close();            
        }
    }
    private function SignUp(/*Прописать аргументы*/){
        $mysqli = new mysqli($this->hostname,$this->usrname,
        $this->basepassword,$this->basename);
        $res = $mysqli->query("INSERT INTO users(name,email,password) 
                               VALUES('$name','$name','$password')");

    }
    private function SgnIn($email){
        $mysqli = new mysqli($this->hostname,$this->usrname,
        $this->basepassword,$this->basename);
        $res = $mysqli->query("SELECT email,password FROM users WHERE email = $email");
        //Проверит что принимает $res
        

    }


}