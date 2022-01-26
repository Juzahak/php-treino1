<?php

$idade = 15;
$numerodepessoas = 2;

echo "Você só pode entrar a partir de 18 anos\n";
echo "A partir de 16 anos, Acompanhado\n";



if ($idade >= 18) {
echo "Você tem $idade anos, pode entrar sozinho";

} else if ($idade >= 16 && $numerodepessoas > 1) {
        echo "Você tem $idade e esta acompanhado, pode entrar";

    } else {

    echo "Você só tem $idade e não pode entrar!";}



echo "\nAdeus!";