## GetPlayerSummaries

### Example Usage
---
```php
$apikey = "your_api_key";
$steamid = "steam_id";
$useapi = new IPlayerService;
$level = $useapi-> GetSteamLevel($apikey,$steamid);
echo implode(" ",$level);
// This code gives player's level.
```
