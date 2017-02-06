<?php
//Global variables
$actionsAdded = [];

/**
* Stubs functions to be called in Wordpress global space
*/
function add_action($action, $callable)
{
    $GLOBALS['actionsAdded'][] = compact('action', 'callable');
}
