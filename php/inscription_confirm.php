<?php
session_start();

include('config.php');
include('functions.fn.php');

$confirm = userRegistration($db, $_POST['pseudo'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_naissance['naissance'], $_POST['password']);


if($confirm == true){
    header('Location: connexion.php');
}else {
    header('Location: inscription_error.php');
}

?>