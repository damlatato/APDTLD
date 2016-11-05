<?php
class Notification implements JsonSerializable{
	private $id;
	private $timeStamp;
	private $type; //thesaurus
	private $readStatus;
	
	public function __construct($id, $timeStamp, $type, $readStatus){
		$this->id = $id;
		$this->timeStamp = $timeStamp;
		$this->type = $type;
		$this->readStatus = $readStatus;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	public function setTimeStamp($timeStamp){
		$this->timeStamp = $timeStamp;
	}
	public function setType($type){
		$this->type = $type;
	}
	public function setReadStatus($readStatus){
		$this->readStatus = $readStatus;
	}
	public function set($key, $value){
		$this->$key = $value;
	}
	
	public function getId(){
		return $this->id;
	}
	public function getTimeStamp(){
		return $this->timeStamp;
	}
	public function getType(){
		return $this->type;
	}
	public function getReadStatus(){
		return $this->readStatus;
	}
	
	function fromJSON($jnotification){
		$notificationv = json_decode($jnotification,true);
		$notification = new Notification(1, 1, 1, 1);
		foreach($notificationv as $key=>$value){
			$notification->set($key, $value);
		}
		return $notification;
	}
	
	function fromJSONa($notificationAj){
		$notificationAv = json_decode($notificationAj);
		$notificationsA = array();
		foreach($notificationAv as $key=>$notificationj){
			$notification = Notification::fromJSON($notificationj);
			array_push($notificationsA, $notification);
		}
		return $notificationsA;
	}
		
	public function jsonSerialize(){
		return json_encode(get_object_vars($this));
	}
}
?>