<?php
namespace App\Visao;

use App\Util\Util;

class VisaoIndex
{
    public function __construct()
    {
        $titulo = 'Sistema de Veículos';
        $conteudo = 'Seja bem vindo';
        require_once Util::$baseDir . '/visao/template/geral.phtml';
    }
}