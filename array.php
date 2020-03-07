<?php

    // nomeia a variavel com o conteudo armazenado
    var = array("abacaxi","banana","caqui");
    
    foreach ($var as $value) {
        $$value = $value; 
    }

    echo $abacaxi;
    

    // nomeia a variavel com o conteudo da key
    var = array("fruta1"=>"banana", "fruta2"=>"laranja","fruta3"=>"tomate");

    foreach ($var as $key => $value) {
        $$key = $value
    }

    echo $fruta1;









?>