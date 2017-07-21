<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

//ROTA INDEX
$app->get('/', function() {
    
	$page = new Page();
	$page->setTpl("index");

});

//ROTA ADMIN
$app->get('/mestre', function() {
    
	$page = new PageAdmin();
	$page->setTpl("index");

});

$app->run();

 ?>