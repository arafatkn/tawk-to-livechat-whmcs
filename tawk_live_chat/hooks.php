<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function tawk_live_chat_ClientAreaFooterOutput($vars) {
	
    $value = "";
    try {	
    	foreach(Capsule::table('tbladdonmodules')->where('setting', 'clientareacode')->where('module', 'tawk_live_chat')->get() as $data)
    	{
    	    $value = html_entity_decode($data->value);
    	}
    }  catch (Exception $e) {
        echo "Something is wrong. {$e->getMessage()}";
    }
    return "{$value}";
}

add_hook("ClientAreaFooterOutput",1,"tawk_live_chat_ClientAreaFooterOutput");
