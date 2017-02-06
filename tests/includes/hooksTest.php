<?php
/**
* Test suite for Main class for
* Paid Memberships Pro - Membership Level Availability Wordpress Plugin
*/
namespace PMProLA\Test;

class HooksTest extends \PHPUnit\Framework\TestCase
{
    public function testAfterOtherSettingsHookRegistered()
    {
        $actions = array_column($GLOBALS['actionsAdded'], 'action');
        $this->assertContains('pmpro_membership_level_after_other_settings', $actions);
    }
}
