<?php
//here is where we will send response of mpesa to harrado server. Paste in the callback.php in public_html
//later i will be storing this output in a database
//paste in created folder in  in the server
include 'dbconnection.php';//include database file
header("Content-Type: application/json");
$stkCallbackResponse = file_get_contents('php://input');
$logFile = "Donations.json"; //incase of donation details will be logged here a new file called donation.json will be created in the public_html
$log = fopen($logFile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);