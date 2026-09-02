<?php
    $alunos = [
        "Mário" => [
            "nota1" => 5.2,
            "nota2" => 5.5,
            "nota3" => 6.0,
        ],
        "Gabriela" => [
            "nota1" => 8.5,
            "nota2" => 9.1,
            "nota3" => 8.2,
        ],
        "Hugo" => [
            "nota1" => 6.0,
            "nota2" => 7.4,
            "nota3" => 7.8,
        ],
        "Adriana" => [
            "nota1" => 4.2,
            "nota2" => 4.9,
            "nota3" => 3.9,
        ],
    ];

    foreach($alunos as $aluno => $notas){
        $media = array_sum($notas)/count($notas);
        echo "$aluno está com média ". number_format($media, 1, ",",".") . " e " . ($media >= 7 ? "foi Aprovado(a)." : "foi Reprovado(a).");
        echo "<br>";
    }
?>