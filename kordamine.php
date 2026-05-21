<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

    function tervita() {
        return "Tere!";
    }

    echo tervita() . "<br><br>";

    $opilase_nimi = "Karin Eegreid";
    $opilase_vanus = 67;
    $kolm_tulemust = array(5,2,3);

    $sum = array_sum($kolm_tulemust);

    $count = count($kolm_tulemust);

    $average = $sum / $count;

    echo "Keskmine hinne on $average<br>";
    echo "Opilase nimi on $opilase_nimi<br>";
    echo "Opilase vanus on $opilase_vanus<br>";

    echo "Testi tulemused:<br>";

    foreach($kolm_tulemust as $tulemus){
        echo $tulemus . "<br>";
}
	
	if($kolm_tulemust >= 5){
		echo 'väga hea';
	} else if($kolm_tulemust >= 4){ 
		echo 'hea';
	} else if($kolm_tulemust >= 4){
		echo 'rahuldav';
	} else {
		echo 'mitterahuldav';  
	}  

?>

<form method="post">

    Nimi:
    <input type="text" name="nimi"><br><br>

    Sisesta arv:
    <input type="number" name="arv"><br><br>

    <input type="submit" value="Saada">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nimi = $_POST["nimi"];
    $arv = $_POST["arv"];

    echo "Tere, $nimi!<br>";

    if ($arv % 2 == 0) {
        echo "Arv $arv on paaris";
    } else {
        echo "Arv $arv on paaritu";
    }

}

?>
</body>
</html>