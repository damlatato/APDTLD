<?php
function getAccessToken(){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_URL,            "https://api.yaas.io/hybris/oauth2/v1/token" );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt($ch, CURLOPT_POST,           1 );
	curl_setopt($ch, CURLOPT_POSTFIELDS,     "grant_type=client_credentials&scope=hybris.tenant=l2913671 hybris.document_manage hybris.document_view&client_id=6rYNTHzU8iANZPtl0FvNOjZQb2IAhoOY&client_secret=a1V5gB8ItAGWCMxB" );
	curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));
	$result=curl_exec ($ch);
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if ($code!=200){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_URL,            "https://api.yaas.io/hybris/oauth2/v1/token" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POST,           1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,     "grant_type=client_credentials&scope=hybris.tenant=l2913671 hybris.document_manage hybris.document_view&client_id=6rYNTHzU8iANZPtl0FvNOjZQb2IAhoOY&client_secret=a1V5gB8ItAGWCMxB" );
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));
		$result=curl_exec ($ch);					//get users list from DB
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	}
	if ($code==200){
		curl_close($ch);
		$result1 = json_decode($result, true);
		$GLOBALS['token'] = $result1["access_token"];
		$GLOBALS['time'] = (new DateTime())->getTimestamp();
		return $result1["access_token"];
	}
	echo curl_error($ch);
	curl_close($ch);
}

function checkAccessToken(){
	if ( !isset($GLOBALS['time']) || (new DateTime())->getTimestamp() > ($GLOBALS['time']+3550) ){
		return getAccessToken();
	}
	else{
		return $GLOBALS['token'];
	}
}

function post($datatype, $bodyjson){
	$token = checkAccessToken();
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt($ch, CURLOPT_URL,        "https://api.yaas.io/hybris/document/v1/l2913671/l2913671.wish/data/".$datatype);
	curl_setopt($ch, CURLOPT_POST,       1 );
	curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyjson);	//created user as a body
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$token, 'Content-Type: application/json'));
	$result=curl_exec ($ch);							//post user to DB
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if ($code!=201){
		$token = checkAccessToken();
		$result=curl_exec ($ch);						//get users list from DB
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	}
	if ($code==201){
		curl_close($ch);
		return $code;
	}
	echo curl_error($ch);
	curl_close($ch);
}

function delete($datatype, $id){
	$token = checkAccessToken();
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt($ch, CURLOPT_URL,        "https://api.yaas.io/hybris/document/v1/l2913671/l2913671.wish/data/".$datatype."/".$id );
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$token, 'Content-Type: application/json'));
	$result=curl_exec ($ch);					//delete from to DB
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if ($code!=204){
		$token = checkAccessToken();
		$result=curl_exec ($ch);				//get users list from DB
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	}
	if ($code==204){
		curl_close($ch);
		return $code;
	}
	echo curl_error($ch);
	curl_close($ch);
}

function get($datatype){
	$datatype = str_replace(" ","+",$datatype);
	$token = checkAccessToken();
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_URL,        "https://api.yaas.io/hybris/document/v1/l2913671/l2913671.wish/data/".$datatype );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$token, 'Content-Type: application/json'));
	$result=curl_exec ($ch);					//get users list from DB
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if ($code!=200){
		$token = checkAccessToken();
		$result=curl_exec ($ch);				//get users list from DB
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	}
	if ($code==200){
		curl_close($ch);
		return $result;
	}
	echo curl_error($ch);
	curl_close($ch);
}

function put($datatype, $id, $bodyjson){
	$token = checkAccessToken();
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_URL,        "https://api.yaas.io/hybris/document/v1/l2913671/l2913671.wish/data/".$datatype."/".$id );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyjson); //created user as a body
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$token, 'Content-Type: application/json'));
	$result=curl_exec ($ch);					//post user to DB
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if ($code!=200){
		$token = checkAccessToken();
		$result=curl_exec ($ch);				//get users list from DB
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	}
	if ($code==200){
		curl_close($ch);
		return $code;
	}
	echo curl_error($ch);
	curl_close($ch);
}
?>