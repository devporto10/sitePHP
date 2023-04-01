<?php
//arquivo de conexao
//mysqlli_connect
$hots = "localhost";
$user = "root";
$pass = "";
$db = "db_sitephp";

$link = mysqli_connect ($hots,$user,$pass,$db);

date_default_timezone_set('America/Sao_Paulo');  //CONFIGURAÇÃO GERAL DE HORARIOS


/*if (!$link) {
    printf("Can't connect to localhost. Errorcode: %d\n", mysqli_connect_errno());
}else{
    echo "Connect";
}
*/


?>