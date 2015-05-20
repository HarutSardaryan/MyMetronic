<?php
	function httpGet($url)
{
	
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}

	$url="http://graph.facebook.com/oauth/access_token
    ?grant_type=client_credentials
    &client_id=11111111
    &client_secret=9999999999&format=html";
	
 $res=httpGet($url);
 var_dump($res);

 
?>

