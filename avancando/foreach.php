<?php


$contaCorrente = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12345678912 => [
        'titular' => 'Roberto',
        'saldo' => 300
    ]
];

$contaCorrente[12378945610] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contaCorrente as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}