# Steam-API
Use Steam API with PHP easily

# Base Code
```
<?php
$api_key = "your api key";
$steamid = "your steam id";
$api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamid";
$json = json_decode(file_get_contents($api_url),true);
 ?>
 ```
 
 # How to Find Steam API?
 - Log in to your Steam Account on Browser
 - Go to this [link](https://steamcommunity.com/dev/apikey)
 - If there's no api key, create one
 
 *Or you can find your api key with Steam Client too.*
 
 :warning: Don't share your api key :warning:
