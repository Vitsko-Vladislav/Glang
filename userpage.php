<?php
//Выбрать момент для распределения ролей
session_start();
$name = $_COOKIE['usrname'];
echo $name;
require_once('User.php');
$user = new User(); // Добавить сборку конструктором

