<?php 

require_once("vendor/autoload.php");

use  \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    $page=new Page(); // nesse momneto chama o construct e adiciona o header na tela

    $page->setTpl("index"); //carega o conteudo e o destruct é automatico e então carrega o footer

});

$app->run(); // tudo carregado, agora roda

 ?>