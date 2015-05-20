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

	$url="http://www.google.am/?gws_rd=cr,ssl&ei=ON9ZVZbJGMajyAPkioH4Bw/format/html";
	
 $res=httpGet($url);
 //$res=json_decode($res);
 var_dump($res);

 
?>

