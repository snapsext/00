<?php
		define('ACCESS_KKEY',"AKIAI5CJ7BN5OH5CSPJA");
		define('SECRET_KKEY',"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");
		define('ASSOCIATE_TTAG',"anu-21");
		define('AMZLANGF',"com");

$storeName		= "BOOK Online";
$devasin = '0553524267';
$codetracker = '<!-- Histats.com  START (hidden counter)--><!-- Histats.com  END  -->';//histat 

//jika aff amazon langsung $aff=''; Access Key ID:

//$aff = 'https://www.youtube.com/watch?v=yU9A3_ul9iw';
$url_2      = 'http://r.playnowstore.com/?id=21&o=4'; // Books Opt (Int'l)

$aff = $url_2;
//========================================//
function bacaHTML($url){
     $data = curl_init();
	 curl_setopt($data, CURLOPT_SSL_VERIFYPEER, 0 );
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
	 curl_setopt($data, CURLOPT_TIMEOUT, 35);
	 curl_setopt($data, CURLOPT_FOLLOWLOCATION, true);
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
function apc_amazon_signed_request($params){
	$method = "GET";
	$host = "ecs.amazonaws.com";
    $uri = "/onca/xml";
    $params["Service"] = "AWSECommerceService";
    $params["AWSAccessKeyId"] = ACCESS_KKEY;
    $params["Timestamp"] = gmdate("Y-m-d\TH:i:s\Z");
    $params["Version"] = "2011-08-01";
    $params["AssociateTag"] = ASSOCIATE_TTAG;
    ksort($params);
    $canonicalized_query = array();
    foreach ($params as $param=>$value)
    {
        $param = str_replace("%7E", "~", rawurlencode($param));
        $value = str_replace("%7E", "~", rawurlencode($value));
        $canonicalized_query[] = $param."=".$value;
    }
    $canonicalized_query = implode("&", $canonicalized_query);
    $string_to_sign = $method."\n".$host."\n".$uri."\n".$canonicalized_query;
    $signature = base64_encode(hash_hmac("sha256", $string_to_sign, SECRET_KKEY, True));
    $signature = str_replace("%7E", "~", rawurlencode($signature));
    $request = "http://".$host.$uri."?".$canonicalized_query."&Signature=".$signature;
    return $request;
 } 
function curPageURL()
{
	$pageURL = 'http://';

	if ($_SERVER["SERVER_PORT"] != "80") 
	{
		$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
	}
	else
	{
		$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
?>