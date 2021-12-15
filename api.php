<?php
//Get Player Info
function GetPlayerSummaries($apikey,$userid,$param){
$api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$apikey."&steamids=".$userid;
$json = json_decode(file_get_contents($api_url),true);
switch($param){
case "getall":
return var_dump($json['response']['players'][0]);
break;
default;
return $json['response']['players'][0][$param];
}
}



?>
