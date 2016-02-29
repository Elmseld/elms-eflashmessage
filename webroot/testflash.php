<?php 
/**
 * This is a Elms pagecontroller.
 *
 */

// Get environment & autoloader.
require __DIR__ . '/config_with_app.php'; 


// Inject the comment service into the app
$di->setShared('msg', function() use ($di) {
	$controller = new \Elms\EFlashMessage\EFlashMessage();
	return $controller;
});

$app->theme->addStylesheet('css/EFlashMessage.css');

$app->msg->alert('Alert flash meddelande!!');
$app->msg->success('Success flash meddelande!!');
$app->msg->error('Error flash meddelande!!');
$app->msg->info('Info flash meddelande!!');
$app->theme->setVariable('title', "Flash messages")
            ->setVariable('main', $app->msg->outputMsgs());
$app->msg->clearMsg();



// Render the response using theme engine.
$app->theme->render();
