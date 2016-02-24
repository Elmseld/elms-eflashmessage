<?php

namespace Elms\EFlashMessage;

/**
 * A testclass
 * 
 */
class EFlashMessageTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * Test
	 *
	 * @return void
	 *
	 */
	public function testGetNameFromSession()
	{
			$msg = new \Elms\EFlashMessage\EFlashMessage();
			$di    = new \Anax\DI\CDIFactoryDefault();
			$msg->setDI($di);
		
		// Inject the comment service into the app
			$di->setShared('msg', function() use ($di) {
				$controller = new \Elms\EFlashMessage\EFlashMessage();
				$controller->setDI($di);
				return $controller;
					});

			$di->setShared('session', function () {
					$session = new \Anax\Session\CSession();
					$session->configure(ANAX_APP_PATH . 'config/session.php');
					$session->name();
					//$session->start();
					return $session;
			});

 				$message = "testing message";
        $msg->errorMessage($message);
        $msg->warningMessage($message);
        $msg->noticeMessage($message);
        $msg->successMessage($message);
        $messages = $msg->outputMsgs();
        foreach ($messages as $index => $value) {
            $this->assertEquals($message, $value['message'], "Form element value missmatch, method.");
        }    
		
	}
}