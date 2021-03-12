<?php 

session_start();

require_once("vendor/autoload.php");

use  \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    $page=new Page(); // nesse momneto chama o construct e adiciona o header na tela

    $page->setTpl("index"); //carega o conteudo e o destruct é automatico e então carrega o footer

});

$app->get('/admin', function() {

	User::verifyLogin();
    
    $page=new PageAdmin(); // nesse momneto chama o construct e adiciona o header na tela

    $page->setTpl("index"); //carega o conteudo e o destruct é automatico e então carrega o footer

});

$app-> get('/admin/login', function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);
	
	$page->setTpl("login");

});

$app->post('/admin/login', function(){

	User::login($_POST["login"], $_POST["password"]);

	header("location: /admin");
	exit;

});

$app->get('/admin/logout', function(){
	User::logout();

	header("location: /admin/login");
	exit;
});

$app->run(); // tudo carregado, agora roda

 ?>