<?php

class User {
public $name;
public $password;
public $email;
public $age;
public $country;
public $firstlang;
public $studlang;


public function loadlogo(){
    
}
    public function CheckArt(){
        
    }
}  ///// end of User Class        
class Moderator extends User{
public function deleteArt(){

}
public function correctArt(){

}
public function baneUser(){

}

}
class Admin extends User{
    
}
class Teacher extends User{
    public function CreateArt(){

    }
    public function CreateRoom(){

    }

    
}
class signUser extends User{
    
}
class Student extends User{
    
}