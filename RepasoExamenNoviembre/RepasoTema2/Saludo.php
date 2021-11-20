<?php
    $idioma= $_REQUEST['idioma'];
    $idioma_es="Hola buenas tardes";
    $idioma_en="Hello Good Afternoon";
    $idioma_de="Hallo guten Tag";
    $idioma_fr="Salut bon après-midi";
    $idioma_it="Ciao buon pomeriggio";

    $idiomaElegido="idioma_".$idioma;

    echo "<h1>Saludo: ".$$idiomaElegido,"<h1>";

?>