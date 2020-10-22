<?php



if ( $_POST['password'] == "admin" && $_POST['username'] == "admin@admin.fr")
{
header('Location: converter.php');
exit();
} else {
    echo"Mauvais mot de passe";
     }  
     header('Location: login.php');
?>