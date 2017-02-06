<?php
/**
* Hooks for Paid Memberships Pro - Membership Level Availability Wordpress Plugin
*/
namespace PMProLA;

class Hooks
{
    /**
    * Construct hooks object
    */
    public function register()
    {
        //Register hooks to display options after other settings
        \add_action('pmpro_membership_level_after_other_settings', array($this, 'afterOtherSettings'));
    }

    /**
    * Hook to display options after other settings when creating or editing a membership level
    */
    public function afterOtherSettings()
    {
        require_once(PMPROLA_VIEWS.'after_other_settings.php');
    }
}
