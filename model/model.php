<?php
  function validarClientTipo($tipo)
  {
    if ($tipo == "user")
    {
      $resultado = "USUARIO";
    }

    if ($tipo == "aluno")
    {
      $resultado = "ALUNO";
    }

    if ($tipo == "prof")
    {
      $resultado == "PROFESSOR";
    }

    return $resultado;
  }

  function validarClientSexo($sexo)
  {
    if ($sexo == "Masculino")
    {
      $resultado = "M";
    }
    
    if ($sexo == "Feminino")
    {
      $resultado = "F";
    }

    return $resultado;
  }
?>