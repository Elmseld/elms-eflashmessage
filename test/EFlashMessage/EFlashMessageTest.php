<?php

namespace Elms\EFlashMessage;

/**
 * A testclass
 * 
 */
class EFlashMessageTest extends \PHPUnit_Framework_TestCase {

	public function testInfo() {
	$test = new \Elms\EFlashMessage\EFlashMessage();
					$test->info('content');
					$res = $test->outputMsgs();
					$exp = "<div class='type'><p>content</p></div>";
					$this->assertEquals($res, $exp, "Missmatch");
	}
	
	public function testShowMsg() {

	$test = new \Elms\EFlashMessage\EFlashMessage();
					$res = $test->outputMsgs();
					$exp = null;
					$this->assertEquals($res, $exp, "Missmatch");
	}
}