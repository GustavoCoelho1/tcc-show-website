<?php
    include_once("../model/modelUser.php");
    include_once("../model/conexao.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    if (logar())
    {
        header("Location: ../view/login.php?login=s");
    }
    else
    {
        header("Location: ../view/login.php?login=n");
    }
?>