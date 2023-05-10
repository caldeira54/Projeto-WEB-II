<?php
namespace App;

use App\Visao\VisaoIndex;
use Bramus\Router\Router;

require './vendor/autoload.php';

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
