<?php
    $lado1 = 5;
    $lado2 = 5;
    $lado3 = 8;

    if (($lado1+$lado2 > $lado3) && ($lado2+$lado3 > $lado1) && ($lado3+$lado1 > $lado2)) {
        echo "É um triângulo ";
        switch(true){
            case ($lado1===$lado2 && $lado2===$lado3):
                echo "equilátero.";
                break;
            case ($lado1==$lado2 || $lado2 == $lado3 || $lado3 == $lado1):
                echo "isósceles.";
                break;
            default:
                echo "escaleno.";
                break;
        }
    } else {
        echo "Não é um triângulo válido.";
    }
?>