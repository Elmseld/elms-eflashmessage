<?php

namespace Elms\EFlashMessage;


/**
 * Elms\EFlashMessage\EFlashMessage
 *
 * Denna klass skapar en funktion för flash meddelande.
 */

	class EFlashMessage {
			
				/**
				 * Initalerar kontrollen
				 * 
				 * @return void
				 */
		public function __construct() {
				if(!isset($_SESSION['msg'])) {
		   	$_SESSION['msg'] = array();
			}
				}
			
					/**
					 * Lägg till ett alert meddelande
					 *
					 * @param $message string med meddelandets test
					 *
					 * @return void
					 */
				public function alert($content) {
					$message = array('content' => $content, 'type' => 'alert');
					$_SESSION['msg'][] = $message;
				}


					/**
					 * Lägg till ett sucess meddelande
					 *
					 * @param $message string med meddelandets test
					 *
					 * @return void
					 */
				public function success($content) {
					$message = array('content' => $content, 'type' => 'success');
					$_SESSION['msg'][] = $message;
				}

					/**
					 * Lägg till ett error meddelande
					 *
					 * @param $message string med meddelandets test
					 *
					 * @return void
					 */
				public function error($content) {
					$message = array('content' => $content, 'type' => 'error');
					$_SESSION['msg'][] = $message;
				}

				/**
				 * Lägg till ett informations meddelande
				 *
				 * @param $message string med meddelandets test
				 *
				 * @return void
				 */
				public function info($content) {
					$message = array('content' => $content, 'type' => 'info');
					$_SESSION['msg'][] = $message;
				}


				/**
				 * Prints the messages in the session flasher
				 */
				public function outputMsgs(){
						$messages = $_SESSION['msg'];
						$output = null;
						if($messages) {
								foreach ($messages as $key => $message) {
										$output .= "<div class='" . $message['type'] . "'><p>" . $message['content'] . "</p></div>";
								}
						}
						return $output;

				}

				/**
				 * Clear messages in the session messenger
				 */
				public function clearMsg() {
					$_SESSION['msg'] = null;
				} 
}