<?php
$aluno =[
    "Nome" => "Filipe",
    "Idade" => 16,
    "Curso" => "MTEC DS"
];

foreach ($aluno as $campo => $valor) {
    echo $campo.": ".$valor."<br>";
}

?>