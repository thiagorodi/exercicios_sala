<?php

    //local no qual o banco de dados está instalado
    $local = "localhost:3308";
    $usuario = "root";
    $senha = "usbw";
    $bd = "cadastro";

    $conexao = mysqli_connect($local,$usuario,$senha,$bd) 
                    or die("ERRO");

?>
