<?php
class Address{
	private $id;
	private $fullName;
	private $street;
	private $housenumber;
	private $city;
	private $postCode;
	private $country;
	private $longitude;
	private $latitude;
	
	public function __construct($fullName, $street, $housenumber, $city, $postCode, $country){
		$this->fullName = $fullName;
		$this->street = $street;
		$this->housenumber = $housenumber;
		$this->city = $city;
		$this->postCode = $postCode;
		$this->country = $country;
		//$this->longitude = $longitudes;
		//$this->latitude = $latitude;
	}
	
	public function setfullName($fullName){
		$this->fullName = $fullName;
	}
	public function setstreet($street){
		$this->street = $street;
	}
	public function sethousenumber($housenumber){
		$this->housenumber = $housenumber;
	}
	public function setcity($city){
		$this->city = $city;
	}
	public function setpostCode($postCode){
		$this->postCode = $postCode;
	}
	public function setcountry($country){
		$this->country = $country;
	}
	public function setlongitudes($longitude){
		$this->longitude = $longitude;
	}
	public function setlatitude($latitude){
		$this->latitude = $latitude;
	}
	public function set($key, $value){
		$this->$key = $value;
	}
	
	public function getfullName(){
		return $this->fullName;
	}
	public function getstreet(){
		return $this->street;
	}
	public function gethousenumber(){
		return $this->housenumber;
	}
	public function getcity(){
		return $this->city;
	}
	public function getpostCode(){
		return $this->postCode;
	}
	public function getcountry(){
		return $this->country;
	}
	public function getlongitude(){
		return $this->longitude;
	}
	public function getlatitude(){
		return $this->latitude;
	}
	
	public function jsonSerialize(){
		return json_encode(get_object_vars($this));
	}
	
	function fromJSON($jaddress){
		$addressv = json_decode($jaddress,true);
		$address = new Address( 1, 1, 1, 1, 1, 1);
		foreach($addressv as $key=>$value){
			$address->set($key, $value);
		}
		return $address;
	}
}
?>