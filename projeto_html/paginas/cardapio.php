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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/pizza.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
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

        <h1 id="texto">Pizzas:</h1>

        <div class="centralizado">
            <table class="tabela">
                <tr>
                    <th>Recheio</th>
                    <th>Pequena</th>
                    <th>Média</th>
                    <th>Grande</th>
                    <th>Família</th>
                </tr>
                <tr>
                    <td>Mussarela</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 40,00</td>
                    <td>R$ 45,00</td>
                </tr>
                <tr>
                    <td>Carne de Sol</td>
                    <td>R$ 30,00</td>
                    <td>R$ 35,00</td>
                    <td>R$ 45,00</td>
                    <td>R$ 50,00</td>
                </tr>
                <tr>
                    <td>Bacon</td>
                    <td>R$ 28,00</td>
                    <td>R$ 32,00</td>
                    <td>R$ 42,00</td>
                    <td>R$ 48,00</td>
                </tr>
                <tr>
                    <td>Portuguesa</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 40,00</td>
                    <td>R$ 45,00</td>
                </tr>
                <tr>
                    <td>4 Queijos</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 38,00</td>
                    <td>R$ 42,00</td>
                </tr>
                <tr>
                    <td>Marguerita</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 40,00</td>
                    <td>R$ 45,00</td>
                </tr>
                <tr>
                    <td>Calabresa</td>
                    <td>R$ 25,00</td>
                    <td>R$ 35,00</td>
                    <td>R$ 40,00</td>
                    <td>R$ 45,00</td>
                </tr>
                <tr>
                    <td>Frango c/ Catupiry</td>
                    <td>R$ 25,00</td>
                    <td>R$ 35,00</td>
                    <td>R$ 40,00</td>
                    <td>R$ 50,00</td>
                </tr>
                <tr>
                    <td>Mista</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 40,00</td>
                    <td>R$ 45,00</td>
                </tr>
                <tr>
                    <td>Cheddar</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 38,00</td>
                    <td>R$ 42,00</td>
                </tr>
                <tr>
                    <td>Camarão</td>
                    <td>R$ 35,00</td>
                    <td>R$ 40,00</td>
                    <td>R$ 50,00</td>
                    <td>R$ 60,00</td>
                </tr>
                <tr>
                    <td>Chocolate</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 45,00</td>
                    <td>R$ 55,00</td>
                </tr>
                <tr>
                    <td>Brigadeiro</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 45,00</td>
                    <td>R$ 55,00</td>
                </tr>
                <tr>
                    <td>Romeu e Julieta</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 45,00</td>
                    <td>R$ 55,00</td>
                </tr>
                <tr>
                    <td>Banana c/ Canela</td>
                    <td>R$ 25,00</td>
                    <td>R$ 30,00</td>
                    <td>R$ 45,00</td>
                    <td>R$ 55,00</td>
                </tr>
            </table>


            <br><br><br>

        </div>
        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../js/code.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>

</html>
