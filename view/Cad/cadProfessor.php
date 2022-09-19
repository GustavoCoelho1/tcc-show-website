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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    </head> 
    
    <body>
        <?php include_once("navBar.php"); ?>
        <main class="fundo" id="fundo">
            <div class="cad_center">
                <div class="cad_formLyt">
                    <div class="cad_bordaAmarela">
                        <center> <h1 class="cad_titulo"> Dados Pessoais </h1> </center>

                        <form class="row g-3 cad_form" method="POST" action="../controller/inserirProfessor.php">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" name="txt_NomeClient" id="inputEmail4" placeholder="Insira seu nome completo" required>
                            </div>

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">CPF</label>
                                <input type="text" class="form-control" name="txt_CPF" id="cpf" placeholder="000.000.000-00" required>
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Sexo</label>
                                <select id="cmb" name="cmb_Sexo" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="Masculino" style="color: #0A005b">Masculino</option>
                                <option value="Feminino" style="color: #0A005b">Feminino</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">Número de Celular</label>
                                <input type="text" class="form-control" name="txt_Celular" data-mask="(00) 00000-0000" data-mask-selectonfocus="true" id="cel" placeholder="(00) 00000-0000" required>
                            </div>

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" name="dt_DtNasc" id="inputAddress" data-mask="000.000.000-00" placeholder="Insira seu email" required>
                            </div>

                            <center><div class="cad_traco"></div>

                            <h3 class="cad_subtitulo"> Dados de Professor </h3> </center>

                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">Número de Matrícula:</label>
                                <input type="text" class="form-control" name="txt_Matricula" required>
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">ETEC:</label>
                                <select id="cmb" name="cmb_Escola" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                    <option value="" selected disabled>Selecione...</option>
                                    <?php include_once('listaEtecs.php')?>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck" style="color: #0A005b">
                                    * Eu declaro que li e concordo com os <a href="#"> Termos de Uso e Privacidade </a> do TCC Show e Centro Paula Souza
                                </label>
                                </div>
                            </div>

                            <input type="hidden" name="txt_NomeUser" value="<?= $_POST['txt_NomeUser']?>">
                            <input type="hidden" name="txt_Email" value="<?= $_POST['txt_Email']?>">
                            <input type="hidden" name="cmb_Tipo" value="<?= $_POST['cmb_Tipo']?>">
                            <input type="hidden" name="txt_Senha" value="<?= $_POST['txt_Senha']?>">
                            
                            <div class="col-12">
                                <center> <button type="submit" class="btn cad_formBtn">Cadastrar</button> </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Fim do bloco de cadastro -->
        </div>
        </main>
        <div class="cad_footerLyt" id="rodape">
            <?php include_once("footer.php"); ?>
        </div>
    </body>

    <script src="js/cadastro.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>