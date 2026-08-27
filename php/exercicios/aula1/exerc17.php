<?php
    $nota1 = 7.5;
    $nota2 = 8.0;
    $nota3 = 6.5;
    $media = ($nota1 + $nota2 + $nota3)/3;
    echo "A média foi de ".number_format($media, 1, ",",".");
    echo "<br>";
    echo "Você " . ($media >= 7 ? "foi Aprovado" : ($media >= 5 ? "ficou de Recuperação" : "foi Reprovado"))
?>