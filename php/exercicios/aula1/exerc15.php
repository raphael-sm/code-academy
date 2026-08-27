<?php
    $temaPadrao = "Claro";
    $nome = $nomeUsuario ?? "Anônimo"; // Como não foi declarado $nomeUsuario, o operador ?? irá colocar o valor padrão de "Anônimo"
    $tema = $temaEscolhido ?? $temaPadrao; // O Mesmo ocorre aqui, mas o tema padrão pode ser alterado pela variável $temaPadrao.

    echo "$nome, $tema";

    // Pode ser feito um experimento com um formulário HTML e um HTTP GET/POST para ver o operador em ação realmente, mas não tenho tempo pra fazer isso
?>