<?php
session_start();

include('config.php');
include('functions.fn.php');

$user = userConnect($db, $_POST['pseudo'], $_POST['password']);



if($user == true){
    header('Location: dashboard.php');
}else {
    header('Location: index.php');
}

?>