<?php
$usuarios = [
    [
     "Usuário" => "Filipe",
     "Perfil" => "Aluno"  
    ],
    [
     "Usuário" => "Heber",
     "Perfil" => "Professor"  
    ],
    [
     "Usuário" => "Fábio",
     "Perfil" => "Coordenador"  
    ],
];

    foreach ($usuarios as $usuario) {
        echo "Usuário: ".$usuario["Usuário"]."<br>";
        echo "Perfil: ".$usuario["Perfil"]."<br>";
        echo "<br>";
    }



?>