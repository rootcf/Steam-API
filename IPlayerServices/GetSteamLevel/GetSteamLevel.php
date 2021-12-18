<?php
// Example Code for GetSteamLevel
// For more information, visit https://partner.steamgames.com/doc/webapi/IPlayerService#GetSteamLevel

include 'api.php_location';
$apikey = "your_api_key";
$steamid = "steam_id";
$useapi = new IPlayerServices;
$level = $useapi-> GetSteamLevel($apikey,$steamid);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetPlayerLevel</title>
    <link rel="stylesheet" href="https://raw.githack.com/rootcf/rootie-css/main/rootie-.css">
</head>
<body class="nomargin white poppins" style="background-color:rgb(32,32,50);">
    <div class="main center-div w-350">
        <h1 class="nomargin center fw-900 circle w-300 h-100 center-div mtop-250">Steam Level is <?php echo implode(" ",$level) ?></h1>
    </div>
</body>
</html>
