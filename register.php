<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "classes-php" . DIRECTORY_SEPARATOR . "UserPDO.php";
include 'navbar.php';


if(isset($_POST['soumettre'])){

    $check = 1;
    $login = $_POST['login'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $newuser = new User ();
    $newuser-> register("$login", "$password", "$email", "$firstname", "$lastname");
    header('location: connexion.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="classes.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="formulaire" >
    <h1>Register:</h1>
        <form method="post"> 
            <fieldset>
                <legend> <span class="number">.</span>Informations:</legend><br>
                <br><br>
                <br>
                <input type="text" placeholder="Login" name="login" id="login"><br>
                <br>
                <input type="password" placeholder="Password" name="password" id="password"><br>
                <br>
                <input type="email" placeholder="email" name="email" id="email"><br>
                <br>
                <input type="text" placeholder="firstname" name="firstname" id="firstname"><br>
                <br>
                <input type="text" placeholder="lastname" name="lastname" id="lastname"><br>
                <br>

                <br>
                <?php if(isset($mess_passwd)){ ?>
                <?= $mess_passwd ?>
                <?php } ?>
             
                 <br>
                 <br>

                <button type="submit" name="soumettre" >Valider</button>
                <?php if(isset($mess_error)){ ?>
                    <span><p><?= $mess_error ?></p></span>
                <?php } ?>

            </fieldset>
            </form>
    </div>
