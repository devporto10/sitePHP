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
    $id_user = $line['id_user'];
}


if($senha_log == $senha && $nivel == 1){
   //echo "OK";
   $titulo =     $_POST["titulo"];
   $conteudo =    $_POST["conteudo"];
   $foto =     $_FILES["foto"] ['name'];
   $tipo = $_FILES["foto"] ['type'];

   // SUBSTUINDO CARACTERES INDESEJADOS OK //
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

 $registro = false;
    if ($titulo != "" && $foto != "" && $conteudo != "") {
    $registro = true;

    }else{
        echo "<script>alert('Erro.');window.history.go(-1);</script>";
    }

    $sql = mysqli_query($link, "SELECT * FROM tb_postagems ORDER BY id_post DESC LIMIT 1");
while($line = mysqli_fetch_array($sql)){
   $id = $line['id_post'];
  
    }

    


    if($registro == true){

        @$id = $id+1;
    //echo "id: " . $id;
    $pasta = "postagems/post$id";
    //echo $pasta;
    if(file_exists($pasta)){
        //echo "pasta ja existe";
    }else{
        mkdir($pasta,0777);
        
        
    }
    $dt = date("Y-m-d ");
    $hr = date("H:i:s");
    $page = 2;

    mysqli_query($link, "INSERT INTO tb_postagems(titulo,imagem,texto,dt,hr,pagge,id_user)
                VALUES('$titulo', '$foto', '$conteudo', '$dt', '$hr', '$page', '$id_user')");
                move_uploaded_file($_FILES['foto'] ['tmp_name'],$pasta."/".$foto);

                echo "<script>alert('Formulario feito com sucesso.');window.history.go(-1);</script>";
                //header('location:form_postar.php');

    }else{
        echo "<script>alert('Não foi possivel cadastrar esse conteudo.');window.history.go(-1);</script>";
    }

 

}else{
    header('location:index.php');
}



?>