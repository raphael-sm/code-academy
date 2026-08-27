<?php
    $idade = 18;

    switch (true) {
        case($idade < 0):
            echo "Não minta.";
            break;
        case($idade<=11):
            echo "Você é uma criança.";
            break;
        case($idade<=17):
            echo "Você é um adolescente.";
            break;
        case($idade<=29):
            echo "Você é um jovem adulto.";
            break;
        case($idade<=59):
            echo "Você é um adulto.";
            break;
        case($idade<=122):
            echo "Você é um idoso.";
            break;
        default:
            echo "Não minta.";
            break;
    }
?>