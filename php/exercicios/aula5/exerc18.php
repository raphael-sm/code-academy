<?php
    $disciplinas = ['PHP', 'JavaScript', 'Python', 'Java'];
    $notas = [8.5, 7.0, 9.2, 6.8];

    $assoc = array_combine($disciplinas, $notas);

    print_r($assoc);

    /*
        Explicação:
            array_merge(a, b) - simplesmente combina os dois arrays de forma direta, sem associação:
                [A, B, C] + [D, E, F] = [A, B, C, D, E, F]

            array_combine(a, b) - combina os dois arrays em uma relação chave-valor:
                [A, B, C] + [D, E, F] = [A => D, B => E, C => F]
    */
?>