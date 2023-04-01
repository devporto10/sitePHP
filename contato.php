<html>
<head>
<title>Site</title>
<link rel="stylesheet" href="css/formato.css" type="text/css">
</head>
<body>

  <div id="geral">

    <div id="topo">
      <?php include "topo.php" ?>
    </div>
    <div id="menu">
      <?php include "menu.php"?>
    </div>
    <br>
   <div id="conteudo">
    <form action="cad_contato.php" method="POST">
        <label class="legenda">Nome:</label><br>
        <input type="text" name="nome" class="campos" placeholder="Insira seu nome completo" required><br>

        <label class="legenda">E-mail:</label><br>
        <input type="email" name="email" class="campos" placeholder="Insira seu Email" required><br>

        <label class="legenda">Assunto</label><br>
        <input type="text" name="assunto" class="campos" placeholder="Sobre o que vc deseja falar?"><br>

        <label class="legenda">Conteudo</label><br>
        <textarea name="conteudo" class="campos2" placeholder="Digite no maximo de 140 caracteres o conteudo" maxlength="140"></textarea> <br>
        <input type="submit" value="enviar" class="bt_enviar">

    </form>
   </div>
    <div id="rodape">
      <?php include "rodape.php"?>
    </div>

  </div>




</body>

