<?php
namespace App\Visao;

use App\Util\Util;
class VisaoVeiculo
{
    public function __construct()
    {
        
    }

    public function mostrarLista($lista)
    {
        $titulo = 'Listagem de Veículos';
        $conteudo = '
        <table border="1">
        <tr>
            <th>ID</th>
            <th>FABRICANTE</th>
            <th>MODELO</th>
            <th>ANO</th>
            <th>PLACA</th>
        </tr>';

        foreach ($lista as $registro) {
            $conteudo .= '<tr>';
            $conteudo .= '<td>' . $registro['id'] . '</td>';
            $conteudo .= '<td>' . $registro['fabricante'] . '</td>';
            $conteudo .= '<td>' . $registro['modelo'] . '</td>';
            $conteudo .= '<td>' . $registro['ano'] . '</td>';
            $conteudo .= '<td>' . $registro['placa'] . '</td>';
            $conteudo .= '</tr>';
        }

        $conteudo .= '</table>';

        require_once Util::$baseDir . '/Visao/template/geral.phtml';
    }

    public function mostrarForm()
    {
        $titulo = 'Cadastro de Veículo';
        $action = Util::$baseUrl . '/veiculo/cadastrar';
        $conteudo = '
        <form action="' . $action .'" method="post">

            <label for="fabricante">Fabricante</label>
            <input type="text" id="fabricante" name="fabricante"><br>

            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo"><br>

            <label for="ano">Ano</label>
            <input type="text" id="ano" name="ano"><br>

            <label for="placa">Placa</label>
            <input type="text" id="placa" name="placa"><br>

            <button>Salvar</button>

        </form>';

        require_once Util::$baseDir . '/visao/template/geral.phtml';
    }

    public function mensagem($titulo, $conteudo)
    {
        require_once Util::$baseDir . '/visao/template/geral.phtml';
    }
}
?>