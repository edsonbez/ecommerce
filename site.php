<?php 

use \Hcode\PageAdmin;

$app->get('/', function() {
    
    $page=new Page(); // nesse momneto chama o construct e adiciona o header na tela

    $page->setTpl("index"); //carega o conteudo e o destruct é automatico e então carrega o footer

});

 ?>