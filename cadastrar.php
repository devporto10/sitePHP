<?php
//arquivo de cadastro
include "connect.php";                  //NOTA: Para o proxmio que vier usar esse codigo quebrei a cabeça um tempo aqui no metodo $_POST ou $_GET tenha cuidado ao usar
$nome =     $_POST["nome"];             // aspas isso pode dar um conflito no momento do banco de dados interpertar as variaveis e arrays.
$email =    $_POST["email"];
$senha =    $_POST["senha"];
$resenha =  $_POST["repetesenha"];
$lembrete = $_POST["lembrete"];
$foto =     $_FILES["foto"] ['name'];
$tipo = $_FILES["foto"] ["type"];


// COLOCANDO NO FUSO HORARIO CERTO //
//date_default_timezone_set('America/Sao_Paulo');

$dt = date('Y-m-d');
$hr = date('h:i:s');

//  ---------------------------------- //

// REGISTRO DE SENHA DO FORMULARIO //
$registro = false;
 if($nome != "" && $senha != "" && $resenha != "" && $lembrete != "" && $foto != ""){
        if($senha != $resenha){
            echo "senhas diferentes";
         }else{
         $registro = true;
        }
 }else{
   echo "<script>alert('Não foi possivel criar o cadastro');window.history.go(-1);</script>";
 }
// FAZENDO UM CONSULTA NO BANCO DE DADOS
$sql = mysqli_query($link, "SELECT * FROM tb_user ORDER BY id_user DESC LIMIT 1");
while($line = mysqli_fetch_array($sql)){
   $id = $line['id_user'];
   $email_user = $line['email'];
//-----------------------------------------//   
}
// FIM REGISTRO DE SENHA DO FORMULARIO //




// CRIAÇÃO E VERIFICAÇAO DE PASTA DE USUARIOS //
$id = $id+1;
$pasta = "user" . $id;//user4
if(file_exists("user/".$pasta)){
   echo "<script>alert('essa passta ja existe');</script>";
}else{
   mkdir("user/".$pasta,0777);
   //echo "<script>alert('a pasta ".$pasta." foi criada com sucesso');</script>";
}
// FIM DA CRIAÇÃO E VERIFICAÇAO DE PASTA DE USUARIOS //





// VERIFICAÇÃO DE TIPOS DE FOTOS //
$formatos = array(1=>"image/png",2=>"image/jpg",3=>"image/jpeg",4=>"image/gif");

// SUBSTUINDO CARACTERES INDESEJADOS //
function sanitizeString($string) {

   // matriz de entrada
   $what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );

   // matriz de saída
   $by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_' );

   // devolver a string
   return str_replace($what, $by, $string);
}

$foto = sanitizeString($foto);
$foto = strtolower($foto);
// FIM DO SUBSTUINDO CARACTERES INDESEJADOS //

$teste = array_search($tipo,$formatos);
if($teste == true){
   move_uploaded_file($_FILES ['foto'] ['tmp_name'],"user/".$pasta."/".$foto);
}else{
   echo "<script>alert('Arquivo invalido.');</script>";
}

// FIM DA VERIFICAÇÃO DE TIPOS DE FOTOS //

if($registro == true && $email != $email_user){
   mysqli_query($link, "INSERT INTO tb_user (nome, email ,senha ,lembrete ,foto ,nivel ,dt ,hr)VALUES
   ('$nome', '$email', '$senha', '$lembrete', '$foto', 5, '$dt', '$hr' );");
   echo "<script>alert('Cadastro concluido com Êxito!.');window.location.href='index.php';</script>";
}else{
   echo "<script>alert('Email ja esta em uso.');window.history.go(-1);</script>";
}


?>