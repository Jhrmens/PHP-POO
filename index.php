<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<pre>
<?php
    require_once 'ItemPedido.php';
    require_once 'Transporte.php';
    require_once 'Tv.php';
    require_once 'Cliente.php';
    require_once 'Endereco.php';
    require_once 'Pedido.php';
    $l[0] = new Tv("100x60", "Sony", "AHJ4", "3200", "SMART TV SONY 2018"); // Definindo os atributos co __constructor
    $l[1] = new Tv("180x130", "LG", "BBSC", "5500", "SMART TV LG 2018");
    $x = new Transporte("Caminhao", "Sanka", "Sampa", "23");
    $y[0] = new ItemPedido($l[1], $x); // a classe ItemPedido recebe dois Objetos do tipo Cliente e produto
    $y[1] = new ItemPedido($l[0], $x);
    $e = new Endereco("Rua dos Guaitacazes", "Jardim Embare", "Varginha", "São Paulo");
    $c = new Cliente("Jhonatan Mendes", "444-444-444-44", $e); // cliente recebe endereco
    $pedido = new Pedido($y, $c);
    print_r($pedido); 
?>
</pre>
</body>
</html>
