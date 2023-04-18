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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--JavaSrcipt-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!--Meu CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--Fav icon-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Adm</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg secondary-bg-color">
    <div class="container">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item li-color">
                <a href="index.php" class="nav-link li-color">Home</a>
            </li>
            <li class="nav-item">
                <a href="postagem.php" class="nav-link li-color">Postagems</a>
            </li>
            <li class="nav-item">
                <a href="scripts_css.php" class="nav-link li-color">Script CSS</a>
            </li>
            <li class="nav-item">
                <a href="contato.php" class="nav-link li-color">Contato</a>
            </li>
        </ul>
    </div>
  </nav>
    <!--ADM container-->
    <div class="container col-11 col-md-9" id="form-container">
        <img src="<?php echo "user/user$id/$foto"; ?>" alt="perfil" id="foto-pf">
        <h5>Bem vindo a Tela de adm: <?php echo $nome; ?> </h5>
        <i class="bi bi-file-post"><a href="form_postar.php">Crie uma Postagem</a></i> <br>
        <i class="bi bi-file-post"><a href="form_srciptcss.php">Crie um Script</a></i> <br>
        <i class="bi bi-door-open"><a href="logout.php">Sair</a></i>
   </div>
</body>
</html>