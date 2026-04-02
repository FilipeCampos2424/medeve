<?php
$produtos = [
    [
        "Nome" => "Controle USB",
        "Preço" => 20.00
    ],
    [
        "Nome" => "Capinha de celular",
        "Preço" => 15.00
    ]
    ];

foreach ($produtos as $produto) {
    echo "Nome: ". $produto["Nome"]."<br>";
    echo "Preço: R$". $produto["Preço"]."<br>";
    echo "<br>";
}


?>