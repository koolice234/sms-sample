<?php
	include('smsgateway.php');
	$smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzQ3NTQzOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2Nzc0LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.TDIE2vZztRr7_la-_BF8oRh89do69eZO6BLB5ZlSORI","clydetambok@gmail.com","denmark213");
	$deviceID = 108194;
	$options = [
        'send_at' => strtotime('+30 seconds'), // Send the message in 10 minutes
        'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
    ];
	$result = $smsGateway->sendMessageToNumber('+639474298815', "sample message", $deviceID, $options);
	echo json_encode($result);
?>