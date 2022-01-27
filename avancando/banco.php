<?php

require 'funcoes.php';

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

//unset ($contaCorrente[12345678911]);

$contaCorrente[12345678911] = sacar($contaCorrente[12345678911], 500);

$contaCorrente[12345678910] = sacar($contaCorrente[12345678910], 500);

//$contaCorrente[12345678912] = sacar($contaCorrente[12345678912], 500);

$contaCorrente[12345678912] = depositar($contaCorrente[12345678912], 500);

letrasmaiusculas($contaCorrente[12345678910]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contaCorrente as $cpf => $conta) { ?>
        <dt>
            <h3><?php echo $conta['titular']; ?> - <?php echo $cpf; ?></h3>
        </dt>
        <dd>
             Saldo: <?php echo $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>