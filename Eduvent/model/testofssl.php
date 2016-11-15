<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_URL,            "https://api.yaas.io/hybris/oauth2/v1/token" );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POST,           1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,     "grant_type=client_credentials&scope=hybris.tenant=l2913671 hybris.document_manage hybris.document_view&client_id=6rYNTHzU8iANZPtl0FvNOjZQb2IAhoOY&client_secret=a1V5gB8ItAGWCMxB" );
curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));
$result=curl_exec ($ch);
echo $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo curl_error($ch);
curl_close($ch);
?>