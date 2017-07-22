<?php

	require 'Slim/Slim.php';
	\Slim\Slim::registerAutoloader();

	$app = new \Slim\Slim();

	$app->get('/exemplo/:dados', function($dados) {

		echo "Com método GET hello $dados";

	});

	$app->post('/exemplo', function() use ($app) {

		$nome = $app->request()->getBody();

		echo "Com método POST Hello $nome";

	});


	$app->put('/exemplo', function() use ($app){

		$nome = $app->request()->getBody();

		echo "Com método PUT hello Tudo bem $nome?";

	});


	$app->delete('/exemplo', function() use ($app){

		$nome = $app->request()->getBody();

		echo "Com método DELETE hello Tchau $nome";

	});


	$app->run();

?>
