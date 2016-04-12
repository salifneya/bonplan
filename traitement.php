<?php
// Include MoceanSMS library file
include ("MoceanSMS.php");

// Declare new MoceanSMS and specify API key and secret
$moceansms_rest = new MoceanSMS('d53c73c2', '0f0e87f6');

// Use sendSMS($from, $to, $message) method to send a message
$rest_response = $moceansms_rest->sendSMS('Salif NEYA', '75824593', 'test Moceans sms');

// Response will be returned in JSON format
//echo $rest_response;
$jsone=json_decode($rest_response);
$status=$jsone->{'messages'}[0]->{'status'};
//echo $status;
switch($status){
	case 0: echo 'Message envoyé avec succès';	
			break;
	default: echo 'Message non envoyé';
			break;
}
?>