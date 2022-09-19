<?php
    function logar()
    {
      $c = new Conexao();
      $conexao = $c -> conectar();

      $login = $_POST["txt_Email"];
      $senha = $_POST["txt_Senha"];
      $opcao = ['cos' => 8];
      $senhaC = password_hash($senha, PASSWORD_BCRYPT, $opcao);

      $lista = $conexao -> query("select usuario_nome as 'Nome', usuario_email as 'Email', usuario_senha as 'Senha' from tb_usuario");

      $loginCerto = false;
      $senhaCerta = false;

      $resultado = false;

      foreach($lista as $usuario)
      {
        if ($login == $usuario['Nome'] || $login == $usuario['Email'])
        {
          $loginCerto = true;
        }

        if (password_verify($senha, $senhaC))
        {
          $senhaCerta = true;
        }
      }
      
      if ($loginCerto == true && $senhaCerta == true)
      {
        $resultado = true;
      }

      return $resultado;
    }
?>