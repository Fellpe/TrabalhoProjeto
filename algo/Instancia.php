<?php

require "Cliente.php";
require "Conta.php";

$cliente = new Cliente("Jayce da Silva Campos","000.000.000-00","0008", $conta);
$conta = new Conta("00004", "1.000.000.000,00", $cliente);

echo "Número da conta: " . $conta->exibirNumero() . PHP_EOL;
echo "Saldo da conta: " . $conta->exibirSaldo() . PHP_EOL;
echo "Nome do cliente: " . $conta->exibirCliente() . PHP_EOL;
?>