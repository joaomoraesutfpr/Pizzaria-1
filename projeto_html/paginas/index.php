<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Pizzaria Delícia</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../imagens/pizza.ico" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilo.css" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico|Sacramento|Satisfy|Parisienne"
        rel="stylesheet" />
</head>

<body>
    <div class="container">
        <header class="primary-header">
            <div class="logo">
                <h1 id="logo">Pizzaria Delícia</h1>
            </div>
            <nav>
                <ul class="main-navigation">
                    <li><a href="./index.php">Página Inicial</a></li>
                    <li><a href="./cardapio.php">Cardápio</a></li>
                    <li><a href="./login_form.php">Login</a></li>
                    <li><a href="./pedido.php">Realizar Pedido</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <figure class="slider">
                <img class="foto" src="../imagens/imgs/001.jpg" />
                <img class="foto" src="../imagens/imgs/002.jpg" />
                <img class="foto" src="../imagens/imgs/003.jpg" />
            </figure>
        </section>

        <img id="gif" src="../imagens/giphy.gif" />

       <h3 class="al">
            <br /><br />Olá <?php echo $_SESSION['user_name'] ?>! Na Pizzaria Delícia estamos aqui para
            fazer você feliz há mais de 25 anos. Nossa missão é simples:
            proporcionar a melhor experiência gastronômica da cidade. Venha
            <a href="./pedido.php">Realizar seu Pedido</a> conosco. Acesse já o
            nosso <a href="./cardapio.php">Cardápio</a> e fique por dentro das
            novidades!
        </h3>

        <br /><br /><br />
    </div>
</body>

</html>
