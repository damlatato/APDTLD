<?php
class Interest implements JsonSerializable{
	private $interest;			//thesaurus
	private $numberOfSearches;	

	
	public function __construct($interest, $numberOfSearches){	
		$this->interest = $interest;
		$this->numberOfSearches = $numberOfSearches;
	}
	
	public function setInterest($interest){
		$this->interest = $interest;
	}
	public function setNumberOfSearches($numberOfSearches){
		$this->numberOfSearches = $numberOfSearches;
	}
	public function set($key, $value){
		$this->$key = $value;
	}
	
	
	public function getInterest(){
		return $this->interest;
	}
	public function getNumberOfSearches(){
		return $this->numberOfSearches;
	}
	
	public static function fromJSON($jinterest){
		$interestv = json_decode($jinterest,true);
		$interest = new Interest(1, 1);
		foreach($interestv as $key=>$value){
			$interest->set($key, $value);
		}
		return $interest;
	}
	
	public static function fromJSONa($interestAj){
		if ($interestAj === 'null'){
			return array();
		}
		$interestAv = json_decode($interestAj);
		$interestA = array();
		foreach($interestAv as $key=>$interestj){
			$interest = Interest::fromJSON($interestj);
			array_push($interestA, $interest);
		}
		return $interestA;
	}
		
	public function jsonSerialize(){
		return json_encode(get_object_vars($this));
	}
	
}
?>