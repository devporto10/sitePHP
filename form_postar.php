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


    </div>
<br><br>
    <div id="box_from">
        <h1 class="titulos" style="margin-left:40%">Formulario de postagem</h1>
        <form action="postar.php" method="post" enctype="multipart/form-data">
            <input type="text" name="titulo" placeholder="Digite o título da postagem"  class="campos_cad">
            <textarea name="conteudo" class="campos_cad" placeholder="Digite aqui o conteudo em até 300 caracteres..." style="height: 250px;" maxlength="300"></textarea>
            <input type="file" name="foto" placeholder="Senha"  class="campos_cad">
            <div id="botoes">
                <input type="submit" value="Publicar" class="bt_cad">
                <input type="reset" value="Limpar" class="bt_cad">   
            </div>
            
          
        </form>
    </div>
    
</body>

</html>