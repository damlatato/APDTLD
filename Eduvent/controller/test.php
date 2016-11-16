<?php
echo 's: ' . $_SERVER["DOCUMENT_ROOT"];

public static function filterEvents($status, $type, $topic, $priceCategory, $StartDate, $EndDate){

	if ($status=='') {
		$status="Published";
	}
	$urlStatus="status:".chr(34).$status.chr(34);

	$urlType='';
	if ($type!=='') {
		$urlType="+type:".chr(34).$type.chr(34);
	}

	$urlTopic='';
	if ($topic!=='') {
		$urlTopic="+topic:".chr(34).$topic.chr(34);
	}

	$urlPriceCat='';
	if ($priceCategory!=='') {
		$urlPriceCat="+topic:".chr(34).$priceCategory.chr(34);
	}
	
	$url = "event?pageNumber=1&pageSize=500&q=" . $urlStatus . $urlType . $urlTopic . $urlPriceCat;

	$jeventlist = get($url);
	$eventlist = Event::fromJSONa($jeventlist);
	$eventlist2 = array();
	
	if ($StartDate!=='' or $EndDate!=='') {
		foreach($eventlist as $event){
			if(strtotime($event->getDatetime())>strtotime($StartDate) && strtotime($event->getDatetime())<strtotime($EndDate)){
				array_push($eventlist2, $event);
			}
		}
		$eventlist=$eventlist2;
	}
	
	return $eventlist;
}
?>