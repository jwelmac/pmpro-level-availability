<?php
/**
* Main class for Paid Memberships Pro - Membership Level Availability Wordpress Plugin
*/
namespace PMProLA;

include PMPROLA_INCLUDES.'Hooks.php';

class Main
{
    public $hooks;

    public function __construct()
    {
        // Register hooks
        $this->hooks = new Hooks();
        $this->hooks->register();
        // Register filters
        // Register shortcodes
    }
}
