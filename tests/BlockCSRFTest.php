<?php
/**
 * Author: xuqingfeng <js-xqf@hotmail.com>
 * Date: 15/2/10
 */

require_once __DIR__ . "/../src/BlockCSRF.php";

class BlockCSRFTest extends PHPUnit_Framework_TestCase {

    protected $blockCSRF;

    protected function setUp() {

        $this->blockCSRF = \Block\BlockCSRF::getInstance();
    }

    public function testGenerate() {

        $this->blockCSRF->generate();
        $this->assertTrue(isset($_SESSION['csrfToken']), "session not generated");
    }

    public function testDestroy() {

        $this->blockCSRF->destroy();
        $this->assertFalse(isset($_SESSION['csrfToken']), "session not destroyed");
    }
}
 