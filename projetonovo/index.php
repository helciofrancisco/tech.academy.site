<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labirinto</title>

    <base href="http://localhost/projetonovo/">

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stlyle" href="css/aos.css">
    <h1><iframe width="1000" height="600" src="JogoLabirinto(1).c3p"></iframe>
</head>

<main>
    <header class="header">
        <a href="home" title="Home" class="header-logo" data-aos="fade-right">
            <img src="imagen/logo.png" allt="Labirinto">
        </a>

        <a href="javascript:showMenu()" title="mostrar menu" class="header-menu" data-aos="fade-left">
            <img src="imagens/barras.pesquisa">
        </a>
        <nav calss="header-nav">
            <ul>
                <li><a href="home" title="Home"></a></li>
                <li><a href="quem somos" title="Quem somos">Quem somos</a></li>
                <li><a href="contato" title="Contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        //imprimir o conteudo do array do GET
        //print_r($_GET);
        
        //recuperar a variavel pagina
        $pagina = $_GET["pagina"] ?? "Home";

        // paginas/home.php
        $pagina = "paginas/{$pagina}.php";

        //verificar se o arquivo existe
        if (file_exists($pagina)) {
            include $pagina;
        }
        ?>
    </main>
    <footer calss="footer">
        <P> Desenvolvido por Helcio Francisco Machado Filho</P>
    </footer>
    <script src="js/aos.js">
    < script >
        <
        script src = "js/fslightbox.js" >
    </script>
    <script>
    AOS.init();

    function showMenu() {
        var menu = documento.querySelector("header-nav");
        menu.classList.toggle(show);
    }
    </script>
    </body>

</html>