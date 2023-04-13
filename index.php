<?php
require_once './util/Util.php';
require_once './modelo/Veiculo.php';
require_once './database/Conexao.php';
require_once './database/DaoVeiculo.php';
require_once './visao/VisaoVeiculo.php';
require_once './controle/ControleVeiculo.php';

$modulo = filter_input(INPUT_GET, 'mod');
$acao = filter_input(INPUT_GET, 'act');

$classe = 'Controle' . $modulo;

$objeto = new $classe();
$objeto->$acao();
?>