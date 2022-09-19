<?php
    include_once("../model/modelAluno.php");
    include_once("../model/conexao.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if (inserirAlunoBanco())
    {
        header("Location: ../view/cadUser.php?inserir=s");
    }
    else
    {
        header("Location: ../view/cadUser.php?inserir=n");
    }
?>