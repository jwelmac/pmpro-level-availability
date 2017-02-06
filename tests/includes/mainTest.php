<?php
/**
* Test suite for Main class for
* Paid Memberships Pro - Membership Level Availability Wordpress Plugin
*/
namespace PMProLA\Test;

use \PMProLA\Main;
use \PMProLA\Hooks;

class MainTest extends \PHPUnit\Framework\TestCase
{
    public function testHooksLoaded()
    {
        $this->assertTrue(array_key_exists('pmproLA', $GLOBALS));
        $this->assertInstanceOf(Hooks::class, $GLOBALS['pmproLA']->hooks);
    }
}
