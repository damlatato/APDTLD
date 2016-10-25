<?php
class UserEdu {
	private $id;
	private $name;
	private $surname;
	private $phone;
	public function __construct($id, $Name, $Surname, $Phone){
		$this->id = $id;
		$this->name = $Name;
		$this->surname = $Surname;
		$this->phone = $Phone;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setSurname($surname){
		$this->surname = $surname;
	}
	public function setPhone($phone){
		$this->phone = $phone;
	}
	
	public function getId(){
		return $this->name;
	}
	public function getName(){
		return $this->name;
	}
	public function getSurname(){
		return $this->surname;
	}
	public function getPhone(){
		return $this->phone;
	}
	public function toJSON(){
		return json_encode($this->expose());
	}
	private function expose() {
		return get_object_vars($this);
	}
	
	public function postUser(){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,            "https://api.yaas.io/hybris/oauth2/v1/token" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POST,           1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,     "grant_type=client_credentials&scope=hybris.tenant=l2913671 hybris.document_manage hybris.document_view&client_id=6rYNTHzU8iANZPtl0FvNOjZQb2IAhoOY&client_secret=a1V5gB8ItAGWCMxB" );
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));
		$result=curl_exec ($ch);
		curl_close($ch);
		$result1 = json_decode($result, true);	//$result1["access_token"] - access token which is valid for 1 hour, lets to create, view, delete records
		
		$userjson = $this->toJSON();			//user as JSON
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,        "https://api.yaas.io/hybris/document/v1/l2913671/l2913671.wish/data/user" );
		curl_setopt($ch, CURLOPT_POST,       1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS, $userjson); //created user as a body
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$result1["access_token"], 'Content-Type: application/json'));
		$result=curl_exec ($ch);				//post user to DB
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if ($code != 201){
			//retry
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,            "https://api.yaas.io/hybris/oauth2/v1/token" );
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
			curl_setopt($ch, CURLOPT_POST,           1 );
			curl_setopt($ch, CURLOPT_POSTFIELDS,     "grant_type=client_credentials&scope=hybris.tenant=l2913671 hybris.document_manage hybris.document_view&client_id=6rYNTHzU8iANZPtl0FvNOjZQb2IAhoOY&client_secret=a1V5gB8ItAGWCMxB" );
			curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));
			$result=curl_exec ($ch);
			curl_close($ch);
			$result1 = json_decode($result, true);	//$result1["access_token"] - access token which is valid for 1 hour, lets to create, view, delete records
			
			$userjson = $this->toJSON();			//user as JSON
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,        "https://api.yaas.io/hybris/document/v1/l2913671/l2913671.wish/data/user" );
			curl_setopt($ch, CURLOPT_POST,       1 );
			curl_setopt($ch, CURLOPT_POSTFIELDS, $userjson); //created user as a body
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$result1["access_token"], 'Content-Type: application/json'));
			$result=curl_exec ($ch);				//post user to DB
			$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
		}
		return $code;
	}
	
	function getUserList(){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,            "https://api.yaas.io/hybris/oauth2/v1/token" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POST,           1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,     "grant_type=client_credentials&scope=hybris.tenant=l2913671 hybris.document_manage hybris.document_view&client_id=6rYNTHzU8iANZPtl0FvNOjZQb2IAhoOY&client_secret=a1V5gB8ItAGWCMxB" );
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));
		$result=curl_exec ($ch);
		curl_close($ch);
		$result1 = json_decode($result, true);	//$result1["access_token"] - access token which is valid for 1 hour, lets to create, view, delete records
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,        "https://api.yaas.io/hybris/document/v1/l2913671/l2913671.wish/data/user" );
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$result1["access_token"], 'Content-Type: application/json'));
		$result=curl_exec ($ch);				//get users list from DB
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if ($code != 200){
			//retry
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,            "https://api.yaas.io/hybris/oauth2/v1/token" );
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
			curl_setopt($ch, CURLOPT_POST,           1 );
			curl_setopt($ch, CURLOPT_POSTFIELDS,     "grant_type=client_credentials&scope=hybris.tenant=l2913671 hybris.document_manage hybris.document_view&client_id=6rYNTHzU8iANZPtl0FvNOjZQb2IAhoOY&client_secret=a1V5gB8ItAGWCMxB" );
			curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/x-www-form-urlencoded'));
			$result=curl_exec ($ch);
			curl_close($ch);
			$result1 = json_decode($result, true);	//$result1["access_token"] - access token which is valid for 1 hour, lets to create, view, delete records
	
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,        "https://api.yaas.io/hybris/document/v1/l2913671/l2913671.wish/data/user" );
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$result1["access_token"], 'Content-Type: application/json'));
			$result=curl_exec ($ch);				//get users list from DB
			$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
		}
		return $result;
	}

}
?>