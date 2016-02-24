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
    public function testGetName()
    {
        $eflash = new \Elms\EFlashMessage\EFlashMessage();

        $res = $eflash->getName();
        $exp = "My Name is Mumintrollet.";
        $this->assertEquals($res, $exp, "The name does not match.");
    }
}
