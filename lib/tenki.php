<?php
 $end_point_url = "https://www.jma.go.jp/bosai/forecast/data/";
 $type = "forecast/";
//  $obj = (object)json_decode(file_get_contents("../assets/js/area.json"));
//  $cnt = 0;
//  foreach($obj->centers as $key=>$value){
// 	$j[$cnt]["name"] = $obj->centers->{$key}->name;
// 	$j[$cnt]["url"] = $end_point_url.$type.$key.".json";
// 	$cnt++;
//  }
 $obj = (object)json_decode(file_get_contents("../assets/js/tenki.json"));
 $cnt = 0;
 foreach($obj->weather as $key=>$value){
	$j[$cnt]["name"] = $obj->weather[$key]->name;
	$j[$cnt]["url"] = $end_point_url.$type.$obj->weather[$key]->urlno.".json";
	$cnt++;
 }
 print json_encode($j);
