<?php
class IPlayerService
{

    //GetSteamLevel
    //For more information, visit https://partner.steamgames.com/doc/webapi/IPlayerService#GetSteamLevel
    function GetSteamLevel($apikey, $userid)
    {
        $api_url = "https://api.steampowered.com/IPlayerService/GetSteamLevel/v1/?key=" . $apikey . "&steamid=" . $userid;
        $json = json_decode(file_get_contents($api_url) , true);
        return $json['response'];
    }

    //GetBadges
    //For more information, visit https://partner.steamgames.com/doc/webapi/IPlayerService#GetBadges
    function GetBadges($apikey,$userid,$param,$array)
    {
        $api_url = "https://api.steampowered.com/IPlayerService/GetBadges/v1/?key=" . $apikey . "&steamid=" . $userid;
        $json = json_decode(file_get_contents($api_url) , true);
     
        switch ($param)
        {
            case "getall":
                return var_dump($json['response']['badges'][0]);
            break;
            case "count":
             return $json['response']['badges'];
            break;
            default;
            return $json['response']['badges'][$array][$param];
    }

    }

}

class ISteamUser
{

    //GetPlayerSummaries
    //For more information, visit https://partner.steamgames.com/doc/webapi/ISteamUser#GetPlayerSummaries
    function GetPlayerSummaries($apikey, $userid, $param)
    {
        $api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $apikey . "&steamids=" . $userid;
        $json = json_decode(file_get_contents($api_url) , true);
        switch ($param)
        {
            case "getall":
                return var_dump($json['response']['players'][0]);
            break;
            default;
            return $json['response']['players'][0][$param];
    }
}

}

?>


