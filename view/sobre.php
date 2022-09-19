<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icone da head -->
    <link rel="shortcut icon" href="./Images/tccshow_ico.ico">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Css Links -->
    <link rel="stylesheet" href="../view/css/navbar.css">
    <link rel="stylesheet" href="../view/css/sobre.css">
    <link rel="stylesheet" href="../view/css/footer.css">
    <link rel="stylesheet" href="../view/css/cad.css">

    <title> TCC Show </title>

</head>

<body>

    <?php
    include_once("../view/navBar.php");
    ?>

    <section class="corpo">
        <div class="cad_formLyt">
            <div class="cad_bordaAmarela">
                <div class="text-box">
                    <h1> Sobre o TCC Show </h1>
                    <p> O projeto TTC Show deu-se ínicio de fato no Brasil, pois pouquissimos
                        sites se especializavam na criação e auxílio no desenvolvimento
                        de um Trabalho de Conclusão de Curso.
                        <br>
                        <br>
                        Visando isso, o grupo Gato Curioso, formado por Catarina Martins, Gabriel Nascimento, Gustavo Coelho,
                        Gyovanna Lemos, Michelle Yana e Willian Robert, desenvolveram
                        a ideia de um site que proporciona aos seus usuários uma assistência
                        na formação de seus projetos.
                    </p>
                </div>
            </div>
        </div>


        <!-- Inicio dos Recursos -->

        <div class="container-recursos">
            <div class="card">
                <div class="circle">
                    <h2> Missão </h2>
                </div>
                <div class="content">
                    <p> Proporcionar ao usuário
                        uma maior qualidade em seu
                        projeto por meio de metodos
                        inovadores.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="circle">
                    <h2> Visão </h2>
                </div>
                <div class="content">
                    <p> Ser a marca que melhor
                        atende e satisfaz as
                        necessidades do projeto de
                        seu usuário. Sendo
                        reconhecida por sua
                        qualidade.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="circle">
                    <h2> Valores </h2>
                </div>
                <div class="content">
                    <p> • Confiança </br>
                        • Dedicação</br>
                        • Profissionalismo</br>
                        • Respeito</br>
                    </p>
                </div>
            </div>
        </div>
        <!--Fim dos Recursos -->
    </section>

    <?php
    include_once("../view/footer.php");
    ?>

</body>