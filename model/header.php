<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icone da head -->
    <link rel="schortcut icon" href="../view/Images/iconehead.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="inicio.js"> </script>
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="">

    <title> TCC Show </title>
</head>

<body>
    <!-- Inicio do NavBar -->
    <div class="posicao" id="topo"> </div>
    <nav>
        <img src="../view/Images/TCCShowLogo.png" class="navbarLogo">

        <form>
            <input class="barra-pesquisa" type="text" size="40" name="pesquisa" size="40" placeholder="Sua duvida aqui!" aria-label="Pesquise">
            <button class="btn-pesquisa" type="submit"> <b> Pesquisar </b> </button>
        </form>

        <div class="mobile-menu">
            <div class="line_1"> </div>
            <div class="line_2"> </div>
            <div class="line_3"> </div>
        </div>

        <div class="nav-links">
            <a class="linha" href="#"> Inicio </a>
            <a class="linha" href="#"> Cadastro </a>
            <a class="linha" href="#"> Fórum </a>
            <a class="linha" href="#"> Sobre </a>
        </div>

        <ul class="usuario">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuário
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#"> Cadastrar </a></li>
                    <li><a class="dropdown-item" href="#"> Login </a></li>
                    <li><a class="dropdown-item" href="#"> Perfil </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="#"><button type="button" onclick="" class="btn-sair"> Sair </button> </a></li>
                </ul>
            </li>
        </ul>

    </nav>
    </div>
    </div>