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
    <form action="novoVeiculo.php" method="post">

        <label for="fabricante">Fabricante</label>
        <input type="text" id="fabricante" name="fabricante"><br>

        <label for="modelo">Modelo</label>
        <input type="text" id="modelo" name="modelo"><br>

        <label for="ano">Ano</label>
        <input type="text" id="ano" name="ano"><br>

        <label for="placa">Placa</label>
        <input type="text" id="placa" name="placa"><br>

        <button>Salvar</button>
        <!--
        <input type="button" value="Cadastrar">
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
-->

    </form>
</body>

</html>