<?php session_start()?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta Tags Obrigatórias -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> TCC Show </title>
        
        <!-- Icone na head-->
        <link rel="shortcut icon" href="./Images/tccshow_ico.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="./bootstrap-5.0.1-dist/css/bootstrap.min.css"/>
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.js"> </script>
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"> </script>

        <!-- Arquivo CSS Style -->

        <link rel="stylesheet" href="./css/cad.css">
        <link rel="stylesheet" href="./css/navBar.css">
        <link rel="stylesheet" href="./css/footer.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    </head> 
    
    <body>
        <?php include_once("./navBar.php"); ?>
        <main class="fundo" id="fundo">
            <div class="cad_center">
                <?php
                if (isset($_GET['inserir']))
                {
                    if($_GET['inserir'] == 's')
                    {?>
                        <div class="cad_alert">
                            <div class="cad_alertBorda">
                                <h5 style="color: #0A005b"> O cadastro foi realizado com sucesso! </h3>
                            </div>
                        </div>
                    <?php
                    }   
                    else if(isset($_SESSION['erroExist']) == true)
                    {?>
                        <div class="cad_alert">
                            <div class="cad_alertBorda">
                                <h5 style="color: #0A005b; margin-bottom: 20px"> Houve os seguintes erros durante o cadastro: </h3>
                                <?php if(isset($_SESSION['nomeUserExist'])) { if($_SESSION['nomeUserExist'] == true) {?> <p> Nome de Usuário já em uso! </p> <?php }}?>
                                <?php if(isset($_SESSION['emailUserExist'])) { if($_SESSION['emailUserExist'] == true) {?> <p> Email já em uso!</p> <?php }}?>
                                <?php if(isset($_SESSION['celClientExist'])) { if($_SESSION['celClientExist'] == true) {?><p> Celular já em uso! </p> <?php }}?>
                                <?php if(isset($_SESSION['cpfClientExist'])) { if($_SESSION['cpfClientExist'] == true) {?> <p> Número de CPF já registrado!</p> <?php }}?>

                                <center> <button id="btnErros" type="button" class="btn cad_formBtn" onclick="window.history.go(-1)">Tentar Novamente</button></center>
                            </div>
                        </div>
                    <?php
                    } 
                    else
                    {?>
                        <div class="cad_alert">
                            <div class="cad_alertBorda">
                                <h5 style="color: #0A005b"> Houve um problema durante o cadastro, tente novamente mais tarde! </h3>
                            </div>
                        </div>
                    <?php 
                    }
                }
                ?>
                <div class="cad_formLyt">
                    <div class="cad_bordaAmarela">
                        <center> <h1 class="cad_titulo"> Cadastrar </h1> </center>

                        <form class="row g-3 cad_form" id="formUser" onsubmit="direcionarPag()" method="POST" action="">
                            <div class="col-md-8">
                                <label for="inputEmail4" class="form-label">Nome de Usuário</label>
                                <input type="text" style="text-transform: uppercase" class="form-control" name="txt_NomeUser" id="inputEmail4" placeholder="Insira um novo nome de usuário" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Tipo de Usuário</label>
                                <select id="cmb_TipoUser" name="cmb_Tipo" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="user" style="color: #0A005b">Novo usuário</option>
                                <option value="aluno" style="color: #0A005b">Aluno</option>
                                <option value="prof" style="color: #0A005b">Professor</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">Email</label>
                                <input type="email" class="form-control" name="txt_Email" id="inputAddress" placeholder="Insira seu email" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="txt_Senha" id="inputAddress2" placeholder="Insira uma nova senha" required>
                            </div>
                            
                            <div class="col-12">
                                <center> <button type="submit" class="btn cad_formBtn">Próximo</button> </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Fim do bloco de cadastro -->
        </main>
        <div class="cad_footerLyt" id="rodape">
            <?php include_once("./footer.php"); ?>
        </div>
    </body>
    <script src="js/cadastro.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>