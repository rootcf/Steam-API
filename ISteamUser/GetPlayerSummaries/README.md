## GetPlayerSummaries

### Example Usage
---
```php
$apikey = "your_api_key";
$steamid = "steam_id";
$param = "avatarfull";
$useapi = new ISteamUser;
$variable = $useapi-> GetPlayerSummaries($apikey,$steamid,$param);
echo $variable;
// This code gives player's avatar.
```
### Parameters
---
**avatarfull** - Full size of the player's avatar  

**avatarmedium** - Medium size of the player's avatar   

**avatar** - Regular size of the player's avatar   

**avatarhash** - Hash of the player's avatar   

**steamid** - Player's steam id

**personaname** - Player's profile name

**profileurl** - Player's profile url

**profilestate** - Player's state ( 1 = Online, 0 = Offline)

For see all of parameters, use **getall** param.

---
### Preview
---
[Website](http://rootie.cf/p/sawp/getplayersummaries.php)


