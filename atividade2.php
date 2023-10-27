<?php

    $numeros = [];

    for ($i = 0; $i < 10; $i++) {
    $numero_informado = readline("Informe um número para a posição $i: \n");

    $numeros[] = $numero_informado;
    }

    rsort($numeros);
    

    foreach ($numeros as $n) {
        print "\n $n";
    }
