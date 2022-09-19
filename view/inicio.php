<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="./Images/tccshow_ico.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./bootstrap-5.0.1-dist/css/bootstrap.css">
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.js"> </script>
        
        <!-- Arquivo CSS Style -->
        <link rel="stylesheet" href="css/inicio.css">
        <link rel="stylesheet" href="css/navBar.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/style.css">
        <title> TCC Show </title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    </head>
    
    <body>
        <!-- Início do Navbar -->
        <div class="posicao" id="topo"></div>
        
        <?php include_once('navBar.php')?>

        <!-- Fim do Navbar -->

        <section class="corpo">
           <div class= "bola_sec"> 
                <img src="Images/TCC Show - Logo.png"> 
                <div class="text-box-mobile">
                    <h1> Bem-vindo(a) ao TCC Show </h1>
                    <p>O melhor repositório de TCCs da ETEC!</p>
                    
                    <a href="#" class="hero-btn"> Novo Projeto </a>
                </div>
            </div>

            <div class="text-box">
                <h1> Bem-vindo(a) ao TCC Show </h1>
                <p>O MELHOR e MAIOR repositório de TCCs da ETEC!</p>
                
                <a href="#" class="hero-btn"> Novo Projeto </a>
            </div>
        </section>
        
        <!-- Inicio do Carousel -->
        <section>
            <div class="container">
                <div id="mainSlider" class="carousel slide barra_carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mainSlider" data-slide-to="0" class="active"> </li>
                        <li data-target="#mainSlider" data-slide-to="1"> </li>
                        <li data-target="#mainSlider" data-slide-to="2"> </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Images/Slide1.png" class="d-block w-100" alt="Dicas">
                            
                            <div class="carousel-caption d-none d-md-block">
                                <h2>  Dicas </h2>
                                <p> Venha ver nossas dicas para te auxiliar em seu projeto. </p>
                                <a href="dicas.html" class="main-btn"> Ver Dicas </a>
                            </div>
                        
                        </div>
                        
                        <div class="carousel-item">
                            <img src="Images/Slide2.png" class="d-block w-100" alt="Forum">
                            
                            <div class="carousel-caption d-none d-md-block">
                                <h2>  Repositório </h2>
                                <p> Venha conhecer os incríveis projetos ETEC! </p>
                                <a href="inicialrepositorio.php" class="main-btn"> Ver Repositório </a>
                            </div>
                        
                        </div>
                        
                        <div class="carousel-item">
                            <img src="Images/Slide3.png" class="d-block w-100" alt="Exercicios">
                            
                            <div class="carousel-caption d-none d-md-block">
                                <h2>  Exercícios </h2>
                                <p> Nossa equipe preparou diversos exercícios para você. </br> Venha testá-los! </p>
                                <a href="#" class="main-btn"> Ver Exercícios </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev"> 
                        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                        <span class="sr-only"> Previous </span>
                    </a>

                    <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next"> 
                        <span class="carousel-control-next-icon" aria-hidden="true"> </span>
                        <span class="sr-only"> Next </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Fim do Carousel -->
    

        <!-- Inicio dos Recursos -->
        <section class="recursos">
            <div class= "linha-rec-cima-x"></div>
            <div class= "linha-rec-cima-y"></div>
            <h1> Recursos </h1>
            <p id="rec-p"> Nosso site oferece diversos recursos, você terá a chance de obte-los assim que se cadastrar.
                <br> <br>
                Venha saber a nossa história e fazer parte desta família!
            </p>
            <div class= "linha-rec-baixo-y"></div>
            <div class= "linha-rec-baixo-x"></div>
        </section>
    
        <div class="indx_recursosCenter">
            <div class="container-recursos">
                <div class="card">
                    <div class="circle">
                        <h2> Repositório </h2>
                    </div>
                    <div class="content">
                        <p> Aqui estão os projetos de seu curso, venha conhece-los.
                        </p>
                        <a href="#"> Saiba Mais </a>
                    </div>
                </div>
                <div class="card">
                    <div class="circle">
                        <h2> Cadastre-se </h2>
                    </div>
                    <div class="content">
                        <p> Estamos aqui para te auxiliar,
                            para isso acontecer se cadastre em nosso site.
                        </p>
                        <a href="#"> Saiba Mais </a>
                    </div>
                </div>
                <div class="card">
                    <div class="circle">
                        <h2> Sobre Nós </h2>
                    </div>
                    <div class="content">
                        <p> TCC Show surgiu a partir da necessidade de oferecer
                            qualidade e profissionalismo ao projeto de seus usuários.
                        </p>
                        <a href="#"> Saiba Mais </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim Recursos -->

        <?php include_once('footer.php'); ?>

        <!-- JavaScript -->
        <script src="script.js"></script>
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    </body>
</html>