<?php
namespace App;

use App\Visao\VisaoIndex;
use Bramus\Router\Router;

require './vendor/autoload.php';

// require_once './util/Util.php';
// require_once './visao/VisaoIndex.php';
// require_once './modelo/Veiculo.php';
// require_once './database/Conexao.php';
// require_once './database/DaoVeiculo.php';
// require_once './visao/VisaoVeiculo.php';
// require_once './controle/ControleVeiculo.php';

// $modulo = filter_input(INPUT_GET, 'mod');
// $acao = filter_input(INPUT_GET, 'act');

// $classe = 'ControleVeiculo' . $modulo;

// $objeto = new $classe();
// $objeto->$acao();

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new Router();

// Define routes
$router->all('/', function(){
    new VisaoIndex();
});

$router->all('/{modulo}/{acao}', function ($modulo, $acao) {
    $classe = 'App\Controle\Controle' . ucfirst($modulo);

    if (method_exists($classe, $acao)) {
        $objeto = new $classe();
        $objeto->$acao();
    } else {
        new VisaoIndex();
    }
});

// Run it!
$router->run();
