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

        <br>

        <form method="post">
            <label for="nome">Bairro:</label>
            <input type="text" id="bairro" name="bairro" placeholder="Seu bairro">
            <label for="end">Rua:</label>
            <input type="text" name="rua" id="rua" placeholder="Sua rua">
            <label for="troco">Número:</label>
            <input type="text" name="numero" id="numero" placeholder="ex.: 111">
            <label for="pedido">Pedido:</label>
            <select name="cardapio" id="pedido">
                <option value="0" selected>Selecione seu Pedido...</option>
                <option value="1">Mussarela</option>
                <option value="2">Carne de Sol</option>
                <option value="3">Bacon</option>
                <option value="4">Portuguesa</option>
                <option value="5">4 Queijos</option>
                <option value="6">Marguerita</option>
                <option value="7">Cheddar</option>
                <option value="8">Calabresa</option>
                <option value="9">Frango c/ Catupiry</option>
                <option value="10">Mista</option>
                <option value="11">Camarão</option>
                <option value="12">Chocolate</option>
                <option value="13">Brigadeiro</option>
                <option value="14">Romeu e Julieta</option>
                <option value="15">Banana com Canela</option>
            </select>
            <label for="pedido">Tamanho:</label>
            <select name="cardapio" id="tamanho">
                <option value="0" selected>Selecione o Tamanho...</option>
                <option value="1">Pequena</option>
                <option value="2">Média</option>
                <option value="3">Grande</option>
                <option value="4">Família</option>
            </select>
            <input type="reset" name="limpar" value="Limpar">
            <input type="submit" name="env" id="enviarpedido" value="Enviar" class="btn-pedido">
        </form>

        <br><br><br><br><br>

    </div>
</body>

</html>
