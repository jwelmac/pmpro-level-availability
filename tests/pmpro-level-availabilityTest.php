<?php
namespace PMProLA\Test;

define('ABSPATH', __DIR__.'/');
include ABSPATH.'../pmpro-level-availability.php';

class PluginInitTest extends \PHPUnit\Framework\TestCase
{
    public $const_base = 'PMPROLA_';

    public function testRootConstantDefined()
    {
        $this->assertTrue(defined($this->const_base.'ROOT'));
    }

    public function testIncludesConstantDefined()
    {
        $this->assertTrue(defined($this->const_base.'INCLUDES'));
    }

    public function testViewsConstantDefined()
    {
        $this->assertTrue(defined($this->const_base.'VIEWS'));
    }
}
