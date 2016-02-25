# elms-eflashmessage

Spara meddelanden i session och visar dem vid anrop. Används i Anax-MVC

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Elmseld/elms-eflashmessage/badges/quality-score.png?b=kmom06)](https://scrutinizer-ci.com/g/Elmseld/elms-eflashmessage/?branch=kmom06)
[![Code Coverage](https://scrutinizer-ci.com/g/Elmseld/elms-eflashmessage/badges/coverage.png?b=kmom06)](https://scrutinizer-ci.com/g/Elmseld/elms-eflashmessage/?branch=kmom06)
[![Build Status](https://travis-ci.org/Elmseld/elms-eflashmessage.svg?branch=master)](https://travis-ci.org/Elmseld/elms-eflashmessage)

## Installation

Installera med Packagist eller clona koden från Github source:
```
"elms/eflashmessage": "dev-master"
```

Lägg till följande kod för att kunna anropa en FlashController i DI i ditt Anax MVC framework :
```
$di->set('FlashController', function() use ($di) {
    $flashController = new \Anax\FlashMessages\FlashController();
    $flashController->setDI($di);
    return $flashController;
});
```
eller 
* lägg in filen webroot/testflash.php i Anaxs webroot 
* och filen css/EFlashMessage.css i webroot/css
* Och kör igång och testa de olika meddelandena!

I filen webroot/testflash.php hittar ni de fyra olika anrop som kan göra, för info, alert, success och error medelanden;

För att spara meddelandena i session -
Error meddelande:
```
$app->msg->error('Error flash meddelande!!');
```
Success meddelande:
```
$app->msg->success('Success flash meddelande!!');
```
Info meddelande:
```
$app->msg->info('Info flash meddelande!!');
```
alert meddelande:
```
$app->msg->alert('Alert flash meddelande!!');
```

För att sedan skriva ut meddelenadet använd: 
```
$app->theme->setVariable('title', "Flash messages")->setVariable('main', $app->msg->outputMsgs());
```
Och för att tömma sessionen på meddelanden använd;
```
$app->msg->clearMsg();
```
