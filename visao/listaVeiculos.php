<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Veículos</title>
</head>

<body>
    <?php
    require_once './menu.php';
    ?>
    <h1>Listagem de Veículos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>FABRICANTE</th>
            <th>MODELO</th>
            <th>ANO</th>
            <th>PLACA</th>
        </tr>
        <?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/projetoaulai3b2023');
        
        require_once BASE . '/modelo/Veiculo.php';
        require_once BASE . '/database/Conexao.php';
        require_once BASE . '/database/DaoVeiculo.php';

        $daoVeiculo = new DaoVeiculo();
        $lista = $daoVeiculo->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['id'] . '</td>';
            echo '<td>' . $registro['fabricante'] . '</td>';
            echo '<td>' . $registro['modelo'] . '</td>';
            echo '<td>' . $registro['ano'] . '</td>';
            echo '<td>' . $registro['placa'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>