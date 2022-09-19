<?php
class Conexao
{
    public function conectar()
    {
        $usuario = "root";
        $url = "localhost:3306";
        $senhaBD = ""; //Mudar aqui
        $nomeBancoDados = "db_tccshow"; //Mudar aqui

        $conexao = mysqli_connect($url, $usuario, $senhaBD, $nomeBancoDados);

        return $conexao;
    }
}
?>