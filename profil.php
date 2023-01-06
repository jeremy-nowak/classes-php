<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "classes-php" . DIRECTORY_SEPARATOR . "UserPDO.php";
session_start();




if (isset($_POST['modify'] )){
    $id= $_SESSION['id'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $newuser = new User ();
    $newuser->update($id, $login, $password, $email, $firstname, $lastname);

}
if (isset($_POST['delete'])){
    $id= $_SESSION['id'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $newuser = new User ();
    $newuser->delete($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="classes.css">
    <title>Profil</title>
</head>

<header>
   <?php 
   include 'navbar.php';
   ?>

</header>
<body>
<center><h1>Bonjour <?= $_SESSION['login']?> </h1></center>
<div class="formulaire">
      <form method="post"> 
            <fieldset>
                <legend> <span class="number">.</span>Modification des informations:</legend><br>
                <br><br>
             
               <input type="text" placeholder="Changer le login " name="login" id="login" value="<?= $_SESSION['login']?>"><br>
             
               <br>
                <input type="password" placeholder="New password" name="password" id="password"><br>
                <br>
                <input type="text" placeholder="New email" name="email" id="email"><br>
                <br>
                <input type="text" placeholder="New firstname" name="firstname" id="firstname"><br>
                <br>
                <input type="text" placeholder="New lastname " name="lastname" id="lastname"><br>
				
                
                <br>

                 <br>
                 <br>

                 <button type="submit" name="modify">Modify informations</button>
                 <button type="submit" name="delete">Delete account</button>
                
            </fieldset>
         </form>
    </div>


</div>
<footer>
</footer>
</body>
</html>
</body>
</html>