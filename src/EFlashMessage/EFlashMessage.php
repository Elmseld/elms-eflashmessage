<?php

namespace Elms\EFlashMessage;


/**
 * Elms\EFlashMessage\EFlashMessage
 *
 * Denna klass skapar en funktion för flash meddelande.
 */

class EFlashMessage implements \Anax\DI\IInjectionAware {

    use \Anax\DI\TInjectable;
	
	
	/**
	 * Initalerar kontrollen
	 * 
	 * @return void
	 */
    public function initialize() {
        if (!$this->session->has('msg')) {
            $this->session->set('msg', array());
        }
    }

	/**
	 * Lägg till medelande till session arrayen
	 *
	 * @param $type string med meddelandes typ
	 * @param $content string med meddelandet
	 *
	 * @return void
	 */
	public function setMsg($type, $content) {
		$temp = $this->session->get('msg');
		$temp[] = array('type' => $type, 'content' => $content);
		$this->session->set('msg', $temp);
	}

	/**
	 * Lägg till ett alert meddelande
	 *
	 * @param $message string med meddelandets test
	 *
	 * @return void
	 */
	public function alert($message) {
		$this->setMsg('alert', $message);
	}
	
		
	/**
	 * Lägg till ett sucess meddelande
	 *
	 * @param $message string med meddelandets test
	 *
	 * @return void
	 */
	public function success($message) {
		$this->setMsg('success', $message);
	}
		
	
	/**
	 * Lägg till ett error meddelande
	 *
	 * @param $message string med meddelandets test
	 *
	 * @return void
	 */
	public function error($message) {
		$this->setMsg('error', $message);
	}
		
	
	/**
	 * Lägg till ett informations meddelande
	 *
	 * @param $message string med meddelandets test
	 *
	 * @return void
	 */
	public function info($message) {
		$this->setMsg('info', $message);
	}

	
	/**
	 * Prints the messages in the session flasher
	 */
	public function outputMsgs() {
		$messages = $this->session->get('msg');
		$output = null;

		if(isset($messages)) {
			foreach($messages as $key => $message) {
				$output .= '<div class="' . $message['type'] . '"><p>' . $message['content'] . '</p></div>';
			}
		}

			return $output;
		}

	/**
	 * Clear messages in the session messenger
	 */
	public function clearMsg() {
		$this->session->set('msg', []);
	}
}