<?php

function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

$numero = (int) readline("Digite um número inteiro: ");

if (ehPrimo($numero)) {
    echo "O número $numero é primo.\n";
} else {
    echo "O número $numero não é primo.\n";
}

