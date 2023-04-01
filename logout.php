<?php
//ARQUIVO PARA FINALIZAR UMA SESSÃO

session_start();// RECUPERO A SESSÃO
unset($_SESSION['login']);
unset($_SESSION['password']);
header('location:index.php');

?>