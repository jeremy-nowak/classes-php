<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "classes-php" . DIRECTORY_SEPARATOR . "UserPDO.php";
session_start();
include 'navbar.php';


if (isset($_POST['button'] )){
    
    $login = $_POST['login'];
    $password = $_POST['password'];

    $newuser = new User ();
    $newuser->connect($login, $password);
    echo $newuser->msg;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="classes.css">
    <title>Connexion</title>
</head>
<body>
        <div class="formulaire" >
    <h1>Connexion:</h1>
        <form method="post"> 
            <fieldset>

                <legend> <span class="number">.</span>Information de log:</legend>
                <br><br>
                <input type="text" placeholder="Login" name="login" id="login"><br>
                <br>
                <input type="password" placeholder="Password" name="password" id="password"><br>
                <br>
                <button type="submit" name="button" >Me connecter</button><br>
                <br><br>

            <br><br><br></fieldset>
            </form>
    </div>
</body>
</html>