

function validarCmb(obj)
{
    var cmb = obj;

    if (obj.value == "Selecione...")
    {
        obj.classList.add('cad_cmbCorCinza')
        obj.classList.remove('cad_cmbCorAzul')
    }
    else if (obj.value != "Selecione...")
    {
        obj.classList.add('cad_cmbCorAzul')
        obj.classList.remove('cad_cmbCorCinza')
    }
}

function direcionarPag()
{
    var cmb = document.querySelector('#cmb_TipoUser');
    var form = document.querySelector('#formUser')

    if (cmb.value == "user")
    {
        form.action = "../view/cadClient.php"
    }

    
    if (cmb.value == "aluno")
    {
        form.action = "../view/cadAluno.php"
    }

    
    if (cmb.value == "prof")
    {
        form.action = "../view/cadProfessor.php"
    }
}

document.addEventListener('load', posicaoFooter());

function posicaoFooter() {
    var main = document.querySelector('#fundo');
    var mainS = window.getComputedStyle(main); //"""instanciando""" o CSS do conteúdo principal (main) <- Sem isso não teria acesso aos valores em Pixels do CSS (Tipo: qual o valor de 20vh? Com essa ""instanciação"" eu tenho acesso aos valores "reais" da estilização desse elemento)
    var hgtPagina = $(window).height(); //Tamanho da tela do usuário (equivalente ao 100vh do css)
    let hgtMain = document.querySelector('#fundo').offsetHeight; //Altura do conteúdo principal (main)
    let hgtFooter = document.querySelector('#rodape').offsetHeight; //Altura do Footer
    var tmhPadd = mainS.paddingBottom; //Aqui estou pegando o tamanho do padding atual (em pixels) do conteúdo principal da página
    tmhPadd.replace('px', ''); //O retorno do "paddingBottom" seria "0px" (0 é representativo), e para converter esse valor para Float depois é preciso que tenha somente números nessa string
    var brecha = hgtPagina - (hgtMain + hgtFooter); //Brecha = Espacinho em branco que ia ficar no final da página

    if (brecha > 0) //Se o tamanho da página - (o tamanho do conteúdo principal (main) + o tamanho do Footer) for menor que 0, quer dizer que o tamanho do Fundo junto com o Footer é maior que o tamanho da página, logo não seria preciso fazer a correção/preenchimento na brecha que iria ficar 
    {
        var padd = parseFloat(tmhPadd) + brecha; //Aqui é basicamente o valor do padding que irá corrigir a brecha que fica no final
        fundo.style.paddingBottom = padd + "px";
    }
}