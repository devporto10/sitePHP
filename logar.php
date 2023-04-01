<?php
// ARQUIVO DE LOGIN //
include "connect.php";

$email =    $_POST["email"];
$senha =    $_POST["senha"];

if($email != "" && $senha != ""){
    //echo "ok";
    $sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$email'");
    $registro = mysqli_num_rows($sql);
    while ($line = mysqli_fetch_array($sql)){
        $senha_user = $line['senha'];
        $nivel = $line['nivel'];
    }
    if($registro){
        if($senha_user == $senha){
            //echo $nivel; teste ok
            session_start();
            $_SESSION['login'] = $email;
            $_SESSION['password'] = $senha;
            if($nivel == 1){
                header('location:adm.php');
            }
            else{
                header('location:cliente.php');
            }



        }else{
            echo "<script>alert('Senha ou Email incorretos.');window.history.go(-1);</script>";
        }
    }else{
        echo "<script>alert('Você não possui cadastro.');window.history.go(-1);</script>";
    }
}
  

?>