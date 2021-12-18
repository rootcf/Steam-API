## GetSteamLevel
⚠️ There can be errors/bugs. ⚠️
---
### Example Usage
---
```php
$apikey = "your_api_key";
$steamid = "steam_id";
$useapi = new IPlayerService;
$badge = $useapi->GetBadges($apikey,$steamid,"badgeid",0);
echo $badge;
// This code gives player's badge from '0' element of array.
```
---
### Parameters
---

**getall** - Get all data       
**count** - Its for count how many elements do api has. "$useapi->GetBadges($apikey,$steamid,"count",0);"
