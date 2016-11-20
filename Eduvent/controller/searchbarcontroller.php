<?php
function autoSuggest($searchstr)
{
	global $titles;
	global $descriptions;
	$result = array();
	foreach($titles as $title){
		if (strchr(mb_strtolower($title),mb_strtolower($searchstr))!==false){
			array_push($result, $title);
		}
	}
	foreach($descriptions as $description){
		if (strchr(mb_strtolower($description),mb_strtolower($searchstr))!==false){
			array_push($result, $description);
		}
	}
	
	return $result;
}

function searchEvents($searchstr){
	echo $searchstr;
	global $titles;
	global $descriptions;
	if (in_array($searchstr,$titles)){
		return Event::getByTitle($searchstr);
	}
	if (in_array($searchstr,$descriptions)){
		return Event::getByDescription($searchstr);
	}
}
?>