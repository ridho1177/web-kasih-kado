<?php
session_start();

$_SESSION['id_admin']='';
$_SESSION['usernameadm']='';

unset($_SESSION['id_admin']);
unset($_SESSION['usernameadm']);

session_unset();
session_destroy();
header('Location:loginPage.php');

?>