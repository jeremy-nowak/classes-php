<?php
// Pour tout selectionner dans la BDD classes et dans la table utilisateurs.
$req = mysqli_query($connect,"SELECT * FROM `utilisateurs` ");
$reqquerry= $req -> fetch_array(MYSQLI_ASSOC);
 var_dump($reqquerry);

// Pour inserer des valeurs dans la table utilisateurs
 $insert = "INSERT INTO `utilisateurs`(`login`, `password`, `email`, `firstname`, `lastname`) VALUES ('?','?','?','?','?')";
 $insertquerry = $connect->query($insert);
 var_dump($insertquerry);

 // Pour mettre a jour la base de donnée avec de nouvelles valeurs
 $uptdate = "UPDATE `utilisateurs` SET`login`='?',`password`='?',`email`='?',`firstname`='?',`lastname`='?'";
 $updatequerry = $connect->query($uptdate);
 var_dump($updatequerry);
 
// Pour supprimer directement dans la base de donnée
$del = "DELETE FROM `utilisateurs`";
$delquerry = $connect->query($del);
var_dump($delquerry);
?>