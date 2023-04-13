<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo veículo</title>
</head>

<body>
    <?php
    require_once './menu.php';
    ?>
    <h1>Novo veículo</h1>
    <?php

    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/projetoaulai3b2023');

    require_once BASE . '/modelo/Veiculo.php';
    require_once BASE . '/database/Conexao.php';
    require_once BASE . '/database/DaoVeiculo.php';

    $fab = $_POST['fabricante'];
    $mod = $_POST['modelo'];
    $an = $_POST['ano'];
    $pl = $_POST['placa'];

    $veiculo = new Veiculo($fab, $mod, $an, $pl);
    $daoVeiculo = new DaoVeiculo();

    if ($daoVeiculo->inclui($veiculo)) {
        echo 'Gravou.';
    } else {
        echo 'Deu Zebra.';
    }
    ?>
</body>

</html>