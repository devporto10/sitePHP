<?php
// ---------------------------------------------------------------- VERIFICAÇÃO DE LOGIN  ------------------------------------------------------//
include "connect.php";
session_start();// RECUPERA A SESSÃO EM ABERTO

$login = $_SESSION['login'];//EMAIL DA SESSÃO
$senha_log = $_SESSION['password'];//SENHA DA SESSÃO

$sql = mysqli_query($link," SELECT * FROM tb_user WHERE email = '$login'" ); //CONSULTA NO BANCO DE DADOS
while($line = mysqli_fetch_array($sql)){
    $senha = $line['senha'];
    $nivel = $line['nivel'];
    $nome = $line['nome'];
    $foto = $line['foto'];
    $id = $line['id_user'];
}
if($senha_log == $senha && $nivel == 1){
   
}else{
    header('location:index.php');
}
//---------------------------------------------------------------------------------------------------------------------------------------------------//
?>

<html>
<head>
<title>Site</title>
<link rel="stylesheet" href="css/formato.css" type="text/css">
</head>
<body>
<div id="menu">
<ul class="links_menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="postagem.php">Postagems</a></li>
    <li><a href="scripts_css.php">Srcipts CSS</a></li>
    <li><a href="contato.php">Contato</a></li>
    

</ul>
<ul>
   
</ul>

    </div>
<br><br>
    <div id="box_log">
       <h1 class="titulos" style="margin-left: 10%;">Bem vindo a tela de ADM: <?php echo $nome; ?> </h1>
       <a href = "form_postar.php" style="margin-left: 2%;">Criar uma Postagem</a> | <a href = "form_srciptcss.php">Criar script CSS</a> |
       <a href = "logout.php">Sair</a>
       <img src = "<?php echo "user/user$id/$foto"; ?>" style="float:right;width:100px;height:auto;margin:-20px 5px 0 0;"> <!-- COLOCANDO O CAMINHO DA FOTO DE PERFIL DO USUARIO (ATENÇÃO NO CAMINHO QUE VOCÊ ESCOLHEU) -->
    </div>
    
</body>

</html>