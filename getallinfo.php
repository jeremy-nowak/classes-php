<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "classes-php" . DIRECTORY_SEPARATOR . "User.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
</head>
<body>
    <?php
    $newuser = new User();
    $newuser->getAllinfos($id, $login, $password, $email, $firstname, $lastname) 

    ?>
    <thead>
    <tr>
        <?php
        foreach ($)

        ?>
    </tr>
    </thead>
</body>
</html>