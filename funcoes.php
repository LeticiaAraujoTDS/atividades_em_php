<?php

    $valor = 110;//não funciona como variavel global, a outra variavel com o mesmo nome se torn auma variavel diferente

    function teste (&$valor){//parametro é opcional, pode estar vazio também
        //também como passar um valor predefinido, se nãp passar valor ele assume um valor na memoria , ex function x ($a = "0")
        $valor = $valor + 90;
        print "valor interno: " . $valor. "\n";
    }
    teste($valor);

    print "valor externo: " . $valor . "\n";
    //passagem de parametro por referencia, só colocar o & antes da variavel na função, o parametro sempre tem que ser uma variavel
