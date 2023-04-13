<?php
require_once 'Conexao.php';
require_once 'Veiculo.php';
require_once 'DaoVeiculo.php';

$veiculo = new Veiculo(
    'Volkswagen',
    'Passati',
    2022,
    'PAS-4525',
    2
);

$dao = new DaoVeiculo();
if($dao->altera($veiculo)) {
    echo 'Editou.';
} else {
    echo 'Algum erro.';
}