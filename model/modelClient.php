<?php
    include('../model/model.php');
  
    function inserirClientBanco()
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

        if(validarUsuarioExiste())
        {
          $_SESSION['erroExist'] = false;

          $conexao -> query("insert into tb_usuario(usuario_nome, usuario_tipo, usuario_email, usuario_senha) values('{$nomeUser}', '{$tipo}', '{$email}', '{$senhaC}')");
          
          $userId = $conexao -> insert_id;
          
          $conexao -> query("insert into tb_cliente(cliente_nome, cliente_sexo, cliente_dtNasc, cliente_celular, cliente_cpf, cliente_flag, usuario_cod_fk) values('{$nomeClient}', '{$sexo}', '{$dtNasc}', '{$cel}', '{$cpf}', '{$flag}', '{$userId}')");
          
          $resultado = $conexao -> commit();
        }
        else 
        {
          $resultado = false;
        }

        return $resultado;
      }
      catch (mysqli_sql_exception $exception) 
      {
        $conexao -> rollback();
        throw $exception;
      }
    }

    function validarUsuarioExiste()
    {
      $c = new Conexao();
      $conexao = $c -> conectar();
    
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

      $listaUser = $conexao -> query("select usuario_nome as 'Nome', usuario_email as 'Email' from tb_usuario");
      $listaClient = $conexao -> query("select cliente_celular as 'Celular', cliente_cpf as 'CPF' from tb_cliente");

      $nomeUserExist = false;
      $emailUserExist = false;
      $celClientExist = false;
      $cpfClientExist = false;

      $_SESSION['erroExist'] = false;
      $_SESSION['nomeUserExist'] = false;
      $_SESSION['emailUserExist'] = false;
      $_SESSION['celClientExist'] = false;
      $_SESSION['cpfClientExist'] = false;

      foreach($listaUser as $usuario)
      {
        if ($nomeUser == $usuario['Nome'])
        {
          $nomeUserExist = true;
        }

        if ($email == $usuario['Email'])
        {
          $emailUserExist = true;
        }
      }

      foreach($listaClient as $client)
      {
        if ($cel == $client['Celular'])
        {
          $celClientExist = true;
        }

        if ($cpf == $client['CPF'])
        {
          $cpfClientExist = true;
        }
      }

      if($nomeUserExist || $emailUserExist || $celClientExist || $cpfClientExist)
      {
        $_SESSION['erroExist'] = true;

        if($nomeUserExist)
        {
          $_SESSION['nomeUserExist'] = true;
        }

        if($emailUserExist)
        {
          $_SESSION['emailUserExist'] = true;
        }

        if($celClientExist)
        {
          $_SESSION['celClientExist'] = true;
        }

        if($cpfClientExist)
        {
          $_SESSION['cpfClientExist'] = true;
        }
        return false;
      } 
      else 
      {
        return true;
      }
    }
?>