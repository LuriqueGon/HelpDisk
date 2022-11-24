<?php

    session_start();

    $titulo = str_replace('#','-',$_POST['titulo']);
    $descricao = str_replace('#','-',$_POST['descricao']);
    $text = $_SESSION['id']. '#'. $titulo. '#'. $_POST['tipo'].'#'. $descricao. PHP_EOL;

    $arquivo = fopen('../../HelpDisk/dados.hd','a');    
    fwrite($arquivo, $text);
    fclose($arquivo);

    header('location: abrirChamado.php');
?>