<?php
$titular = 'Marquinhos';
$saldo = 1000;
do {
    echo '---------------------------' . PHP_EOL;
    echo 'Olá ' . $titular . ', você tem R$ ' . $saldo . ' na sua conta.' . PHP_EOL;
    echo '---------------------------' . PHP_EOL;

    echo '1. Consultar saldo' . PHP_EOL;
    echo '2. Sacar' . PHP_EOL;
    echo '3. Depositar' . PHP_EOL;
    echo '4. Sair' . PHP_EOL;

    $opcao = (float) fgets(STDIN);
    switch ($opcao) {
        case 1:
            echo 'Seu saldo é R$ ' . $saldo;
            break;
        case 2:
            echo 'Você deseja sacar? s/n?';
            $simOuNao = trim(fgets(STDIN));
            if ($simOuNao == 's') {
                echo 'Qual o valor?';
                $saque = (int) fgets(STDIN);
                if ($saque > $saldo) {
                    echo 'Você não tem saldo suficiente' . PHP_EOL;
                } else {
                    $saldo -= $saque;
                    echo 'Você sacou R$ ' . $saque . ' e agora tem R$ ' . $saldo . PHP_EOL;
                }
            } else {
                echo 'Operação de saque cancelada.' . PHP_EOL;
            }
        break;
        case 3:
            echo 'Você quer depositar quanto?';
            $depositar = (int) fgets(STDIN);
            $saldo += $depositar;
            echo 'Você depositou R$ ' . $depositar . ' e agora tem R$ ' . $saldo . PHP_EOL;
            break;
        case 4:
            echo 'Tchau!' . PHP_EOL;
            default:
                echo 'Coloque uma opção válida! ( °-°)' . PHP_EOL;
    }
} while ($opcao != 4);

?>
