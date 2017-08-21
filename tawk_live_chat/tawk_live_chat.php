<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function tawk_live_chat_config() {
    $configarray = array(
    "name" => "Tawk.To Live Chat",
    "description" => "Allows you to install tawk.to live chat software on all cient area pages.",
    "version" => "1.0",
    "author" => "TGL IT <ARAFAT ISLAM>",
    "website" => "www.tglit.com",
    "language" => "english",
    "fields" => array(
    	"clientareacode" => array ("FriendlyName" => "Client Area Tracking Code", "Type" => "textarea", "Rows" => "10", "Cols" => "50", "Description" => "Tracking Code for the client area", "Default" => "", )
    ));
    return $configarray;
}

function tawk_live_chat_activate() {
    # Return Result
    return array('status'=>'success','description'=>'Module was installed. Click configure to place in tracking code.');
    return array('status'=>'error','description'=>'There was an error on activation.');
    return array('status'=>'info','description'=>'There may be a problem.');

}

function tawk_live_chat_deactivate() {
    # Return Result
    return array('status'=>'success','description'=>'Tawk.To Live Chat Module has been succesfully deactivated.');
    return array('status'=>'error','description'=>'There was an error deactivating Tawk.To Live Chat Module.');
    return array('status'=>'info','description'=>'There may be a problem.');

}

function tawk_live_chat_upgrade($vars) {

}

function tawk_live_chat_output($vars) {

	echo "To configure, go to Setup -> Addon Modules -> Tawk.To Live Chat -> Cofigure.";

}

function tawk_live_chat_sidebar($vars) {

}