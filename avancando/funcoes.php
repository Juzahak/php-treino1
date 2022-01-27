<?php

function exibemensagem ($mensagem) {
    echo $mensagem . '<br>';
}

function sacar (array $conta, float $valorsacar): array 
{
    if($valorsacar > $conta['saldo']) {
        exibemensagem("Sem saldo");
    }else{
       $conta['saldo'] -= $valorsacar;
    }
    return $conta;
}

function depositar ($conta, $valorsacar) 
{
    if($valorsacar < 0){
        echo "adicione um valor positivo" . PHP_EOL;
    }else{
    $conta['saldo'] += $valorsacar;
}
    return $conta;
}


function letrasmaiusculas(array &$conta) 
{
 $conta['titular'] = strtoupper($conta['titular']);
}

function exibeconta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}