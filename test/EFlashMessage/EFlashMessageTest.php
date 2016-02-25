<?php

namespace Elms\EFlashMessage;

class CFlashMessageTest extends \PHPUnit_Framework_TestCase {

	public function testInfo() {
		$test = new \Elms\EFlashMessage\EFlashMessage();
        $test->info('content');
        $res = $test->outputMsgs();
        $exp = "<div class='info'><p>content</p></div>";
        $this->assertEquals($res, $exp, "Missmatch");
	}
	
	public function testError() {
		$test = new \Elms\EFlashMessage\EFlashMessage();
        $test->error('content');
        $res = $test->outputMsgs();
        $exp = "<div class='error'><p>content</p></div>";
        $this->assertEquals($res, $exp, "Missmatch");
	}
	
	public function testSuccess() {
		$test = new \Elms\EFlashMessage\EFlashMessage();
        $test->success('content');
        $res = $test->outputMsgs();
        $exp = "<div class='success'><p>content</p></div>";
        $this->assertEquals($res, $exp, "Missmatch");
	}
	
	public function testAlert() {
		$test = new \Elms\EFlashMessage\EFlashMessage();
        $test->alert('content');
        $res = $test->outputMsgs();
        $exp = "<div class='alert'><p>content</p></div>";
        $this->assertEquals($res, $exp, "Missmatch");
	}
	
	public function testShowMsg() {
		$test = new \Elms\EFlashMessage\EFlashMessage();
				$res = $test->outputMsgs();
				$exp = null;
				$this->assertEquals($res, $exp, "Missmatch");
	}
	
		public function testClearMsg() {
		$test = new \Elms\EFlashMessage\EFlashMessage();
				$res = $test->clearMsg();
				$exp = null;
				$this->assertEquals($res, $exp, "Missmatch");
	}
}