<?php
include 'api.php_location';
$apikey = "your_api_key";
$steamid = "steam_id";
$useapi = new IPlayerService;
$param = "badgeid";
$get = $useapi->GetBadges($apikey,$steamid,"count",0);
$i = 0;





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetBadges</title>
</head>
<body>
    <h1 class="center mtop-250"><?php echo $steamid ?> Badge Count : <?php echo count($get) ?></h1><br>
    <ul>
        <?php
    while($i <= count($get) - 1){
    echo "<li>".$useapi->GetBadges($apikey,$steamid,"badgeid",$i)."</li>";
    $i += 1;
    }
    ?>
    </ul>
</body>
</html>
