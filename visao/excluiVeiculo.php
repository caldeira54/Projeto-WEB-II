<?php
require_once 'Conexao.php';
require_once 'DaoVeiculo.php';

$dao = new DaoVeiculo();
if($dao->exclui(3)){
    echo 'Excluiu.';
} else {
    echo 'Zebrou.';
}