<?php 
class Event implements JsonSerializable{ 
    private $id; 
    private $eventType;		//thesaurus
    private $title; 
    private $description;
    private $datetime;
    private $location;		//class address
    private $topic;			//same as interests in user thesaurus
    private $priceCategory; //thesaurus
    private $price;
    private $status;		//thesaurus
    private $eventOrganizer;//userId
    private $users;
    private $votes;
    private $offers;
    private $imgHref;
    public static $statuses = ["Proposed"=>"Proposed", "Published"=>"Published"];
    
    public function __construct($id, $eventType, $title, $description, $datetime, $location, $topic, $price, $status, $imgHref){
    	$this->id = $id;
    	$this->eventType = $eventType;
    	$this->title = $title;
    	$this->description = $description;
    	$this->datetime = $datetime;
    	$this->location = $location;
    	$this->topic = $topic;
    	$this->price = $price;
    	if ($price>0){
    		$this->priceCategory = "Paid";
    	}
    	else{
    		$this->priceCategory = "Free";
    	}
    	$this->status = $status;
    	$this->users = array();
    	$this->votes = array();
    	$this->offers = array();
    	$this->imgHref = $imgHref;
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
    public function setStatus($status){
    	$this->status = $status;
    } 
    public function seteventOrganizer($eventOrganizer){
    	$this->eventOrganizer = $eventOrganizer;
    }
    public function setUsers($users){
    	$this->users = $users;
    }
    public function setVotes($votes){
    	$this->votes = $votes;
    }
    public function setOffers($offers){
    	$this->offers = $offers;
    }
    public function setimgHref($imgHref){
    	$this->imgHref = $imgHref;
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
    public function getTopic(){
    	return $this->topic;
    }
    public function getPrice(){
    	return $this->price;
    }
    public function getPriceCategory(){
    	return $this->priceCategory;
    }
    public function getStatus(){
    	return $this->status;
    }
    public function geteventOrganizer(){
    	return $this->eventOrganizer;
    }
    public function getUsers(){
    	return $this->users;
    }
    public function getVotes(){
    	return $this->votes;
    }
    public function getVotesNumber(){
    	return count($this->votes);
    }
    public function getUsersNumber(){
    	return count($this->users);
    }
    public function getOffers(){
    	return $this->offers;
    }
    public function getimgHref(){
    	return $this->imgHref;
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
		'location'=>$location->jsonSerialize(),
		'status'=>$this->status,
		'eventOrganizer'=>$this->eventOrganizer,
		'users'=>$this->users,
		'votes'=>$this->votes,
		'offers'=>$this->offers,
		'imgHref'=>$this->imgHref
		]);
    }
    
    public static function fromJSON($jevent){
    	$eventv = json_decode($jevent,true);
    	$event = new Event(1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
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
    
    public static function fromJSONa($eventAj){
    	$eventAv = json_decode($eventAj);
    	if (count($eventAv)<1){
    		return array();
    	}
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
	
	private static function saveTitlesAndDescriptions($eventList){		
		global $titles;
		global $descriptions;
		foreach($eventList as $event){
			if (!in_array($event->getTitle(), $titles)){
				array_push($titles,$event->getTitle());
			}
			if (!in_array($event->getDescription(), $descriptions)){
				array_push($descriptions,$event->getDescription());
			}
		}
	}
	
	public static function getEventList(){
		$jeventlist = get("event?pageNumber=1&pageSize=500");
		$eventList = Event::fromJSONa($jeventlist);
		Event::saveTitlesAndDescriptions($eventList);
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getProposedEventList(){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=status:".chr(34).Event::$statuses["Proposed"].chr(34));
		$eventList =  Event::fromJSONa($jeventlist);
		Event::saveTitlesAndDescriptions($eventList);
		return $eventList;
	}
	
	public static function getPublishedEventList(){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=status:".chr(34).Event::$statuses["Published"].chr(34));
		$eventList = Event::fromJSONa($jeventlist);
		Event::saveTitlesAndDescriptions($eventList);
		return $eventList;
	}
	
	/*public static function getOffers($proposedEvent){
		$jofferedEventlist = get("event?pageNumber=1&pageSize=500&fields=offers&q=id:".chr(34).$proposedEvent.getId().chr(34));
		return Event::fromJSONa($jofferedEventlist);
	}*/
	
	public static function getByTopic($topic){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=topic:".chr(34).$topic.chr(34));
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getByTitle($title){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=title:".chr(34).$title.chr(34));
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getByDescription($description){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=description:".chr(34).$description.chr(34));
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getByStatus($status){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=status:".chr(34).$status.chr(34));
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getByTopicAndStatus($topic, $status){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=status:".chr(34).$status.chr(34)."+topic:".chr(34).$topic.chr(34));
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getByTopicAndPriceAndStatus($topic, $priceCategory, $status){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=status:".chr(34).$status.chr(34)
				."+priceCategory:".chr(34).$priceCategory.chr(34)."+topic:".chr(34).$topic.chr(34));
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getByTopicAndTypeAndStatus($topic, $priceCategory, $status){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=status:".chr(34).$status.chr(34)
				."+type:".chr(34).$type.chr(34)."+topic:".chr(34).$topic.chr(34));
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getById($id){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=id:".chr(34).$id.chr(34));
		return Event::fromJSONa($jeventlist)[0];
	}
	
	public static function getByDate($StartDate, $EndDate){
		$eventA = Event::getEventList();
		$eventlist = array();
		foreach($eventA as $event){
			if(strtotime($event->getDatetime())>strtotime($StartDate) && strtotime($event->getDatetime())<strtotime($EndDate)){
				array_push($eventlist, $event);
			}
		}
		return $eventlist;
	}
	
	public static function getListById($ids){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=id:in(".$ids.")");
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getByEventType($eventtype){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=eventType:".chr(34).$eventtype.chr(34));
		return Event::fromJSONa($jeventlist);
	}
	
	public static function getByPriceCategory($priceCategory){
		$jeventlist = get("event?pageNumber=1&pageSize=500&q=priceCategory:".chr(34).$priceCategory.chr(34));
		return Event::fromJSONa($jeventlist);
	}

	public static function filterEvents($status, $type, $topic, $priceCategory, $StartDate, $EndDate){
		if ($status=='') {
			$status="Published";
		}
		$urlStatus="status:".chr(34).Event::$statuses[$status].chr(34);

		$urlType='';
		if ($type!=='All') {
			$urlType="+eventType:".chr(34).$type.chr(34);
		}

		$urlTopic='';
		if ($topic!=='All') {
			$urlTopic="+topic:".chr(34).$topic.chr(34);
		}

		$urlPriceCat='';
		if ($priceCategory!=='All') {
			$urlPriceCat="+priceCategory:".chr(34).$priceCategory.chr(34);
		}
		
		$url = "event?pageNumber=1&pageSize=500&q=" . $urlStatus . $urlType . $urlTopic . $urlPriceCat;
		$jeventlist = get($url);
		$eventlist = Event::fromJSONa($jeventlist);
		$eventlist2 = array();
		
		if ($StartDate!=="All" or $EndDate!=="All") {
			if ($StartDate=="All") {
				$StartDate="";
			}

			if ($EndDate=="All") {
				$EndDate="";
			}

			foreach($eventlist as $event){
				if(strtotime($event->getDatetime())>strtotime($StartDate) && strtotime($event->getDatetime())<strtotime($EndDate)){
					array_push($eventlist2, $event);
				}
			}
			$eventlist=$eventlist2;
		}
		
		//return $eventlist;
		return $jeventlist;
	}
	
	public function addOffer($organizedEvent){	//$this - Event Proposal
		if ($this->getStatus()=="Proposed"){
			if (!in_array($organizedEvent->getId(), $this->getOffers())){
				$eventOffers = $this->getOffers();
				array_push($eventOffers, $organizedEvent->getId());
				$this->setOffers($eventOffers);
				$this->putEvent();
			}
		}
	}
}
?>