<img src="imagem/logo.png" class="logo"/>
<?php
include "connect.php";
session_start(); // RECUPERA SESSÃO EM ABERTO
@$email = $_SESSION['login'];
@$sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$email'"); //CONSULTA NO BANCO DE DADOS
    $registro = mysqli_num_rows($sql);
    while ($line = mysqli_fetch_array($sql)){
        $nivel = $line['nivel'];
}
//------------------------------------------------------------PARA CADA TIPO DE CLIENTE O NAO OS BOTÕES DO TOPO MUDAM-----------------------------------//
if (@$nivel == 1){
    echo "<a href=logout.php class=link_top>Sair</a>";
    echo "<a href= adm.php class=link_top>Ir para o ADM</a>";
}else if (@$nivel == ""){
    echo "<a href=login.php class=link_top>Logar</a>";
    echo "<a href=form_cadastro.php class=link_top>Cadastre-se</a>";
}else{
    echo "<a href=logout.php class=link_top>Sair</a>";
    echo "<a href=cliente.php class=link_top>Ir para cliente</a>";
}
?>
