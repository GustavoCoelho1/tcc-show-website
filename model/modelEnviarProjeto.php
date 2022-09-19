<?php
/*Upload de Imagem */

if (isset($_POST ['txt_NomePro'])) {
    $tipos_permitidos = ['jpg', 'png', 'JPG', 'PNG'];
    $extensao = pathinfo($_FILES['imagem']['name'],
    PATHINFO_EXTENSION);
    /*Ver se o array de "tipos", existem na extensão de arquivos */
    
    if (in_array($extensao, $tipos_permitidos)){
        $pasta = "../1LogoImagem/";
        $nometemporario = $_FILES['imagem']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        // vai realizar o upload do arquivo
        if(move_uploaded_file($nometemporario, $pasta. $novoNome)) {
            echo "<p>Upload de Logo realizado com sucesso!<p>";
        }else{
            echo "<p>Falha no Upload!<p>";
        } 
        // Final do upload

    }else{
        echo "<p>Só é possível enviar imagem em JPG e PNG!<p>";
    } 
} 

/*Upload de Projeto */

if (isset($_POST ['txt_NomePro'])) {
    $tipos_permitidos = ['pdf', 'png', 'doc','txt', 'PDF', 'PNG', 'DOC', 'TXT'];
    $extensao = pathinfo($_FILES['arquivo']['name'],
    PATHINFO_EXTENSION);
    /*Ver se o array de "tipos", existem na extensão de arquivos */
    
    if (in_array($extensao, $tipos_permitidos)){
        $pasta = "../arquivoEnvio/";
        $nometemporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        // vai realizar o upload do arquivo
        if(move_uploaded_file($nometemporario, $pasta. $novoNome)) {
            echo "<p>Upload de arquivo realizado com sucesso!<p>";
        }else{
            echo "<p>Falha no Upload!<p>";
        } 
        // Final do upload

    }else{
        echo "<p>Tipo do arquivo não permitido!<p>";
    } 
} 
?>
