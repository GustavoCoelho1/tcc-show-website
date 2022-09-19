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
        <link rel="stylesheet" type="text/css" href="./bootstrap-5.0.1-dist/css/bootstrap.min.css" />
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.js"> </script>
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"> </script>

        <!-- Arquivo CSS Style -->
        <link rel="stylesheet" href="css/navBar.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/stylerepositorio.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
        <?php include_once("navBar.php"); ?>
        <main class="fundo" id="fundo">
                <?php
                $ano = $_POST['ano'];
                $modulo = $_POST['modulo'];
                $curso = $_POST['curso'];

                ?>
                <div class="rep-alinhamento">
                        <div class="rep_form">
                                <div class="rep_borda">
                                        <form action="listarprojetos.php" class="row g-3" method="POST">
                                                <h1 class="titulo-rep">Repositório de trabalhos!</h1>
                                                <div class="col-sm-4">
                                                        <label for="curso" class="form-label">Ano</label>
                                                        <select required name="ano" id="ano" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)">
                                                                <option value="" selected disabled>Selecione...</option>
                                                                <option value="2021-1">2021 - 1°Semestre</option>
                                                                <option value="2021-2">2021 - 2°Semestre</option>
                                                        </select>
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="curso" class="form-label">Curso</label>
                                                        <select required name="curso" id="curso" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)">
                                                                <option value="" selected disabled>Selecione...</option>
                                                                <option value="Adm">Administração</option>
                                                                <option value="DS">Desenvolvimento de sistemas</option>
                                                        </select>
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="modulo" class="form-label">Módulo</label>
                                                        <select required name="modulo" id="modulo" class="form-select cad_cmbCorCinza">
                                                                <option value="" selected disabled>Selecione...</option>
                                                                <option value="1">1° Módulo</option>
                                                                <option value="2">2° Módulo</option>
                                                                <option value="3">3° Módulo</option>
                                                        </select>
                                                </div>
                                                <div class="col-12">
                                                        <center><button class="botao-procurar-repositorio" type="submit">Procurar</button></center>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
                </br>

                <div class="container">
                        <div class="row">

                                <?php
                                include "../model/Matriz_Tcc.inc";

                                for ($i = 0; $i < count($matriz_tcc); $i++) {
                                        if ($ano == $matriz_tcc[$i][0]) {
                                                if ($curso == $matriz_tcc[$i][1]) {
                                                        if ($modulo == $matriz_tcc[$i][2]) {
                                                                echo ("
                                                
                                                <div class='col text-center mb-4'>
                                                <div class='infos'>
                                                <div class='borda-dupla'>
                                                <img class='logo-projeto' src=' " . $matriz_tcc[$i][6] . " ' alt='Foto do Trabalho' / >
                                                <p class='font-weight-bold text-primary mt-2'> <a href='detalharprojetos.php?pagina=$i'>" . $matriz_tcc[$i][3] . " </a> </p>
                                                <p class='text-justify'> " . $matriz_tcc[$i][4] . " </p>
                                                <a href='detalharprojetos.php?pagina=$i'><button class='botao-infos'>Acesse na íntegra</button></a>
                                                </div>
                                                </div>
                                                </div>

                                                "/*
                                                <div class='card mx-auto p-2' style='width: 18rem;'>
                                                <img src=". $matriz_tcc[$i][4] ." class='card-img-top' alt='Foto do trabalho'>
                                                <div class='card-bod'>
                                                <h5 class='card-title'>" . $matriz_tcc[$i][2] . "</h5>
                                                <p class='card-text'> ". $matriz_tcc[$i][3] . "</p>
                                                <a href='' class='btn btn-primary'>Acesse na íntegra</a>
                                                </div>
                                                </div>*/);
                                                        }
                                                }
                                        }
                                }
                                ?>
                        </div>
                </div>
        </main>
        <div class="cad_footerLyt">
                <?php include_once("footer.php"); ?>
        </div>
</body>
<script src="js/cadastro.js"></script>
</html>