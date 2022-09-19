<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta Tags Obrigatórias -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> TCC Show </title>
        
        <!-- Icone na head-->
        <link rel="shortcut icon" href="./imagens/tccshow_ico.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="./bootstrap-5.0.1-dist/css/bootstrap.min.css"/>
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.js"> </script>
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"> </script>

        <!-- Arquivo CSS Style -->
        <link rel="stylesheet" href="css/navBar.css">
        <link rel="stylesheet" href="css/cad.css">
        <link rel="stylesheet" href="css/footer.css">
        
        <link rel="shortcut icon" href="./Images/tccshow_ico.ico">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    </head> 
    
    <body>
        <?php include_once("navBar.php"); ?>
        <main class="fundo" id="fundo">
            <div class="cad_center">
                <?php
                if (isset($_GET['login']))
                {
                    if($_GET['login'] == 's')
                    {?>
                        <div class="cad_alert">
                            <div class="cad_alertBorda">
                                <h5 style="color: #0A005b"> Usuário logado com sucesso! </h3>
                            </div>
                        </div>
                    <?php
                    }   
                    else
                    {?>
                        <div class="cad_alert">
                            <div class="cad_alertBorda">
                                <h5 style="color: #0A005b"> Confira os dados informados de e-mail ou senha!</h3>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>
                <div class="cad_formLyt">
                    <div class="cad_bordaAmarela">
                        <center> <h1 class="cad_titulo"> Login </h1> </center>

                        <form method="POST" action="../controller/login.php">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Email ou Nome de Usuário</label>
                                <input type="text" class="form-control" name="txt_Email" id="inputAddress" placeholder="Insira seu email" required>
                            </div>
                            
                            <div class="col-12 log_input">
                                <label for="inputAddress2" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="txt_Senha" id="inputAddress2" placeholder="Insira uma nova senha" required>
                            </div>
                            
                            <div class="col-12">
                                <center> <button type="submit" class="btn cad_formBtn">Entrar</button> </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Fim do bloco de cadastro -->
        </main>
        <div class="cad_footerLyt" id="rodape">
            <?php include_once("footer.php"); ?>
        </div>
    </body>
    <script src="js/cadastro.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>