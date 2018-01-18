<?php

// Exotel SID		livingwalls
// Exotel Token		f1cb40db9fdd9e118aab41517abbef0d1125067f
// Exotel Flow		C2Cflow

$post_data = array(
    'From' => $_POST['instant_mobile'],
    'To' => "08039511624",
    // 'CallerId' => "9019113300",
    'CallerId' => "08039511624",
    'Url' => "http://my.exotel.in/exoml/start/55068",
    // 'TimeLimit' => "<time-in-seconds>", //This is optional
    // 'TimeOut' => "<time-in-seconds>", //This is also optional
    'CallType' => "trans"
    // 'StatusCallback' => "<http//: your company URL>" //This is also also optional
);

$exotel_sid = "livingwalls"; // Your Exotel SID - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
$exotel_token = "f1cb40db9fdd9e118aab41517abbef0d1125067f"; // Your exotel token - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Calls/connect";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);
?>