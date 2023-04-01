<div id = "conteudo_principal">
        <h1 class="titulos">Pagina de Script CSS</h1>
        <?php
            include "connect.php";
            $sql = mysqli_query($link," SELECT * FROM tb_postagems WHERE pagge = 2 ORDER BY id_post DESC" ); 
            while($line = mysqli_fetch_array($sql)){
            $titulo = $line ['titulo'];
             $imagem = $line ['imagem'];
            $conteudo = $line ['texto'];
             $data = $line ['dt'];
            $id_post = $line ['id_post'];
             $hora = $line ['hr'];
    
            
        ?>

        <div class="postagens">
            <h1 class="titulos"><?php echo $titulo ?></h1>
            <img src="postagems/<?php echo "post". $id_post. "/" .$imagem ?>" class="imagem">
            <p class="paragrafo"><?php echo $conteudo ?></p>
            <span class="data"><?php echo date ('d/m/Y', strtotime($data));
                echo "<br>". date('H:i', strtotime($hora));?></span>
        </div>
        <?php
            }
         ?>

</div>
         
<div id = "recentes">
    <h1 class="titulos">Recentes</h1>
    <?php
    $contar = 0;
    $sql = mysqli_query($link," SELECT * FROM tb_postagems WHERE pagge = 2 ORDER BY id_post DESC" ); 
    while($line = mysqli_fetch_array($sql) AND $contar < 3){
        $titulo = $line ['titulo'];
        $data = $line ['dt'];
    
    ?>
    <div class="postagem_recentes">
        <h1 class="titulos"><a href="#"><?php echo $titulo ?></h1>
        <span class="data"><?php echo date ('d/m/Y', strtotime($data));?></span>

    
    </div>

    <?php 
    $contar++;
    } 
    ?>
</div>