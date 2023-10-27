<?php

    $suspeito = 0;
    $respostas = [];

    $respostas[] = readline("Telefonou para a vítima? \n");
    $respostas[] = readline("Esteve no local do crime? \n");
    $respostas[] = readline("Mora perto da vítima? \n");
    $respostas[] = readline("Devia para a vítima? \n");
    $respostas[] = readline("Já trablhou com a vítima? \n");

    foreach ($respostas as $resp) {
        if ($resp == "sim") {
            $suspeito++;
            
        }
    }

    if ($suspeito <= 2) {
        print"Inocente\n";
    } else if ($suspeito == 4 || $suspeito == 3) {
        print"Cumplice\n";
    } else if ($suspeito == 5) {
            print"Assasino\n";
    }

//jeito php

<?php

    $suspeito = 0;
    $respostas = [];

    $respostas[] = readline("Telefonou para a vítima? \n");
    $respostas[] = readline("Esteve no local do crime? \n");
    $respostas[] = readline("Mora perto da vítima? \n");
    $respostas[] = readline("Devia para a vítima? \n");
    $respostas[] = readline("Já trabalhou com a vítima? \n");

    $suspeito = array_count_values($respostas);

    if ($suspeito ['sim'] <= 2) {
        print"Inocente\n";
    } else if ($suspeito ['sim'] == 4 || $suspeito ['sim'] == 3) {
        print"Cumplice\n";
    } else if ($suspeito ['sim'] == 5) {
            print"Assasino\n";
    }





