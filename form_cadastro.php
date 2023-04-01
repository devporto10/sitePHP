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
<li><a href="login.php" class="login_cad">Ja possui cadastro? Então faça o seu login aqui.</a></li>
</ul>
    </div>
<br><br>
    <div id="box_from">
        <form action="cadastrar.php" method="post" enctype="multipart/form-data">
            <h1 class="titulos" style="margin-left: 43%">Cadastre-se</h1>
            <input type="text" name="nome" placeholder="Nome" required class="campos_cad">
            <input type="text" name="email" placeholder="Email" required class="campos_cad">
            <input type="password" name="senha" placeholder="Senha" required class="campos_cad">
            <input type="password" name="repetesenha" placeholder="comfirme sua senha" class="campos_cad">
            <input type="text" name="lembrete" placeholder="lembrete da senha" required class="campos_cad">
            <input type="file" name="foto" placeholder="coloque sua foto aqui" required class="campos_cad">
            <div id="botoes">
                <input type="submit" value="Cadastrar" class="bt_cad">
                <input type="reset" value="limpar" class="bt_cad">   
            </div>
          
        </form>
    </div>
    
</body>

</html>