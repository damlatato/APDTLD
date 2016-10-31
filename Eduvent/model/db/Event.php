<?php 
class Event  implements JsonSerializable{ 
    private $id; 
    private $eventType; //thesaurus
    private $title; 
    private $description;
    private $datetime;
    private $location; //class address
    private $topic;	//same as interests in user thesaurus
    private $priceCategory; //thesaurus
    private $price;
    
    public function __construct($id, $eventType, $title, $description, $datetime, $location, $topic, $price){
    	$this->id = $id;
    	$this->eventType = $eventType;
    	$this->title = $title;
    	$this->description = $description;
    	$this->datetime = $datetime;
    	$this->location = $location;
    	$this->topic = $topic;
    	$this->price = $price;
    	if ($price>0){
    		$this->priceCategory = "Not Free";
    	}
    	else{
    		$this->priceCategory = "Free";
    	}
    }
    
    public function setId($id){
    	$this->id = $id;
    }
    public function setEventType($eventType){
    	$this->eventType = $eventType;
    }
    public function setTitle($title){
    	$this->title = $title;
    }
    public function setDescription($description){
    	$this->description = $description;
    }
    public function setDatetime($datetime){
    	$this->datetime = $datetime;
    }
    public function setLocation($location){
    	$this->location = $location;
    }
    public function setTopic($topic){
    	$this->topic = $topic;
    }
    public function setPrice($price){
    	$this->price = $price;
    	if ($price>0){
    		$this->priceCategory = "Not Free";
    	}
    	else{
    		$this->priceCategory = "Free";
    	}
    } 

    public function set($key, $id){
    	$this->$key = $id;
    }
    
	public function getId(){
    	return $this->id;
    }
    public function getEventType(){
    	return $this->eventType;
    }
    public function getTitle(){
    	return $this->title;
    }
    public function getDescription(){
    	return $this->description;
    }
    public function getDatetime(){
    	return $this->datetime;
    }
    public function getLocation(){
    	return $this->location;
    }
    public function getTopics(){
    	return $this->topic;
    }
    public function getPrice(){
    	return $this->price;
    }
    public function getPriceCategory(){
    	return $this->priceCategory;
    }
    
    public function jsonSerialize(){
    	$location = $this->getLocation();
		return json_encode([
		'id'=>$this->id,
		'eventType'=>$this->eventType,	//key
		'title'=>$this->title,
		'description'=>$this->description,
		'datetime'=>$this->datetime,
		'topic'=>$this->topic,
		'price'=>$this->price,
		'priceCategory'=>$this->priceCategory,
		'location'=>$location->jsonSerialize()
		]);
    }
    
    function fromJSON($jevent){
    	$eventv = json_decode($jevent,true);
    	$event = new Event(1, 1, 1, 1, 1, 1, 1, 1);
    	foreach($eventv as $key=>$value){
    		if($key=='location'){
    			$addressv = json_decode($value);
    			$address = new Address(1, 1, 1, 1, 1, 1, 1);
    			foreach($addressv as $key=>$value){
    				$address->set($key, $value);
    			}
    			$event->set('location', $address);
    			continue;
    		}
    		$event->set($key, $value);
    	}
    	return $event;
    }
    
    function fromJSONa($eventAj){
    	$eventAv = json_decode($eventAj);
    	$eventsA = array();
    	foreach($eventAv as $key=>$eventj){
    	if (gettype($eventj)=="string"){
				$event = Event::fromJSON($eventj);
				array_push($eventsA, $event);
			}
			if (gettype($eventj)=="object"){
				$jeventj = json_encode($eventj);
				$event = Event::fromJSON($jeventj);
				array_push($eventsA, $event);
			}
    	}
    	return $eventsA;
    }
    
//////////////////////////////////////////////////
	public function postEvent(){
		post("event", $this->jsonSerialize());
	}
	
	public function putEvent(){
		put("event", $this->getId(), $this->jsonSerialize());
	}
	
	public function deleteEvent(){
		delete("event", $this->getId());
	}
	
	public function getEventList(){
		$jeventlist = get("event");
		return Event::fromJSONa($jeventlist);
	}
}  
?> 