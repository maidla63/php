<?php
$lubatud = array("avaleht", "teenused", "kontakt");
$leht = "avaleht";

if (!empty($_GET["leht"])) {
    $leht = $_GET["leht"];
}

if (in_array($leht, $lubatud) && is_file($leht . ".php")) {
    include($leht . ".php");
} else {
    echo "Valitud lehte ei eksisteeri!";
}
?>

<hr>
<a href="?leht=avaleht">Avaleht</a><br>
<a href="?leht=teenused">Teenused</a><br>
<a href="?leht=kontakt">Kontakt</a><br>