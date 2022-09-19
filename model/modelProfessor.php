<?php
    include('../model/model.php');
  
    function inserirProfessorBanco()
    {
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $c = new Conexao();
      $conexao = $c -> conectar();
  
      $conexao -> autocommit(false);
      $conexao -> begin_transaction();
      try
      {
        //Usuário
        $nomeUser = $_POST["txt_NomeUser"];
        $tipoF = $_POST["cmb_Tipo"]; 
        $tipo = validarClientTipo($tipoF);
        $email = $_POST["txt_Email"];
        $senha = $_POST["txt_Senha"];
        $opcao = ['cos' => 8];
        $senhaC = password_hash($senha, PASSWORD_BCRYPT, $opcao);
  
        //Cliente
        $nomeClient = $_POST["txt_NomeClient"];
        $sexoF = $_POST["cmb_Sexo"];
        $sexo = validarClientSexo($sexoF);
        $dtNasc = $_POST["dt_DtNasc"];
        $cel = $_POST["txt_Celular"];
        $cpf = $_POST["txt_CPF"];
        $flag = "S";

        //Professor
        $matricula = $_POST["txt_Matricula"];
        $escola = $_POST['cmb_Escola'];
        
        $conexao -> query("insert into tb_usuario(usuario_nome, usuario_tipo, usuario_email, usuario_senha) values('{$nomeUser}', '{$tipo}', '{$email}', '{$senhaC}')");
        
        $userId = $conexao -> insert_id;
        
        $conexao -> query("insert into tb_cliente(cliente_nome, cliente_sexo, cliente_dtNasc, cliente_celular, cliente_cpf, cliente_flag, usuario_cod_fk) values('{$nomeClient}', '{$sexo}', '{$dtNasc}', '{$cel}', '{$cpf}', '{$flag}', '{$userId}')");
        
        $clientId = $conexao -> insert_id;

        $conexao -> query("insert into tb_professor(professor_matricula, cliente_cod_fk, escola_cod_fk) values('{$matricula}', '{$clientId}', '{$escola}')");
        
        $resultado = $conexao -> commit();
  
        return $resultado;
      }
      catch (mysqli_sql_exception $exception) 
      {
        $conexao -> rollback();
        throw $exception;
      }
    }
?>