<?php
    session_start();

    include_once("../model/modelClient.php");
    include_once("../model/conexao.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if (inserirClientBanco())
    {
        header("Location: ../view/cadUser.php?inserir=s");
    }
    else 
    {
        header("Location: ../view/cadUser.php?inserir=n");
    }
?>