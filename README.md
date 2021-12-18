# Steam-API
Use Steam API with PHP easily

 # api.php
 ```php
 <?php
include "api.php";
$useapi = new ISteamUser;
$variable = $useapi -> GetPlayerSummaries("your_api_key","steam_id","avatarfull");
echo $variable;
//This code gives user's full avatar.
?>
```

 # How to Find Steam API?
 - Log in to your Steam Account on Browser
 - Go to this [link](https://steamcommunity.com/dev/apikey)
 - If there's no api key, create one
 
 *Or you can find your api key with Steam Client too.*
 
 :warning: Don't share your api key :warning:
