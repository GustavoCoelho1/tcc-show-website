<?php
    include_once("../model/modelProfessor.php");
    include_once("../model/conexao.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if (inserirProfessorBanco())
    {
        header("Location: ../view/cadUser.php?inserir=s");
    }
    else
    {
        header("Location: ../view/cadUser.php?inserir=n");
    }
?>