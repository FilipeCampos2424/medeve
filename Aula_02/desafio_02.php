<?php
$contas = [
    [
        "Descrição" => "Conta de Luz",
        "Valor" => 43,
        "Tipo" => "Pagar"
    ],
    [
        "Descrição" => "Salário Mínimo ",
        "Valor" => 1614,
        "Tipo" => "Receber"
    ],
    [
        "Descrição" => "IPTU",
        "Valor" => 67,
        "Tipo" => "Pagar"
    ],
];

foreach ($contas as $conta) {
    if ($conta["Tipo"] == "Receber") {
        echo "Descrição: ".$conta["Descrição"]."<br>";
        echo "Valor: R$".$conta["Valor"]."<br>";
        echo "Tipo: ".$conta["Tipo"]."<br>";
        echo "<br>";
    }
}


?>