<?php
// Example Code for GetPlayerSummaries
// For more information, visit https://partner.steamgames.com/doc/webapi/ISteamUser#GetPlayerSummaries

include "api.php_location";
$apikey = "your_api_key";
$userid = "your_steam_id";
$useapi = new ISteamUser;
$avatarfull = $useapi -> GetPlayerSummaries($apikey,$userid,"avatarfull");
$profileurl = $useapi -> GetPlayerSummaries($apikey,$userid,"profileurl");
$personaname = $useapi -> GetPlayerSummaries($apikey,$userid,"personaname");
$profilestate = $useapi -> GetPlayerSummaries($apikey,$userid,"profilestate");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://raw.githack.com/rootcf/rootie-css/main/rootie-.css">
    <title>GetPlayerSummaries</title>
</head>
<body class="nomargin poppins " style="background-color:rgb(10,10,10)">
    <div class="main center-div w-350 mtop-225">
        <img src="<?php echo $avatarfull;?>" class="circle w-120 h-120 float-left">
       
        <h1 class="white nomargin mleft-150"><?php echo $personaname ?></h1>
        <a href="<?php echo $profileurl ?>" target="_blank" class="no-decoration blue  nomargin mleft-30" >profileurl</a>
        <?php 
        if($profilestate == "1") {
            echo "<p class='nomargin lime mleft-150'>Online</p>";
        }
        else{
            echo "<p class='nomargin gray mleft-150'>Offline</p>";
        }?>
    </div>
</body>
</html>
