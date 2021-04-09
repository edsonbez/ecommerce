<?php 

use \Hcode\Page;
use \Hcode\Model\Product;

$app->get('/', function() {
    
    $products = Product::listAll();


    $page=new Page(); // nesse momneto chama o construct e adiciona o header na tela


    $page->setTpl("index",[
    "products"=>Product::checkList($products)
    ]); //carega o conteudo e o destruct é automatico e então carrega o footer




});


 ?>