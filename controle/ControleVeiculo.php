<?php
class ControleVeiculo
{
    public function listar()
    {
        $daoVeiculo = new DaoVeiculo();
        $visaoVeiculo = new VisaoVeiculo();
        $lista = $daoVeiculo->listaTodos();

        $visaoVeiculo->mostrarLista($lista);
    }

    public function digitar()
    {
        $visaoVeiculo = new VisaoVeiculo();

        $visaoVeiculo->mostrarForm();
    }

    public function cadastrar()
    {
        $visaoVeiculo = new VisaoVeiculo();
        $daoVeiculo = new DaoVeiculo();

        $fab = $_POST['fabricante'];
        $mod = $_POST['modelo'];
        $an = $_POST['ano'];
        $pl = $_POST['placa'];

        $veiculo = new Veiculo($fab, $mod, $an, $pl);

        if ($daoVeiculo->inclui($veiculo)) {
            $visaoVeiculo->mensagem('Cadastro de Veículo', 'Gravou');
        } else {
            $visaoVeiculo->mensagem('Cadastro de Veículo', 'Erro');
        }
    }
}
?>