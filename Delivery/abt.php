<?php
if(isset($_COOKIE['check']))
{
// авторизация
}
elseif(!isset($_COOKIE['check']))
{
    $p =  "Hello guest";
}


?>
<!DOCTYPE html5> <!-- вариант закинуть это в тпл --->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="conatiner">
        <div class="header">
            <a href="#">Articles</a>
            <a href="#">Communities</a>
            <a href="#">Friends</a>
            <a href="#">Message</a>
        </div>
        <div class="content">
            <h1><?php echo $p ?></h1>
            <p>Welcome to <strong>G-lang.</strong>
            We are hope you'll have many positive meetings,knowledges
            and emotions here.Share your knowledge and and help to another
            recieve one from people around the world.For farther using
            you should to <a href="#">Sign up</a> and you can 
            <a href="#">Go on without</a></p>
            <hr>
           

        </div>
   


</div>  
</body>
</html>

