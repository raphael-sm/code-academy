<?php
    $preco = 500;
    if($preco>=500){
        $desconto = $preco*0.15;
    } else if ($preco >= 200) {
        $desconto = $preco*0.1;
    } else {
        $desconto = $preco*0.05;
    }

    echo "O preço original era de R$".$preco.", e com desconto de ".(($desconto/$preco)*100)."%, virou R$".$preco-$desconto;
?>