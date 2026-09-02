<?php
    $cidades = ['São Paulo', 'Rio de Janeiro', 'Curitiba', 'Belo Horizonte', 'Salvador'];
    echo "Curitiba " . ((in_array('Curitiba', $cidades)) ? "" : "não") . " está dentro do array " . (($res = array_search('Curitiba', $cidades)) ? " no index " . $res : "");
?>  