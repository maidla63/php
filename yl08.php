<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülessane 8 </title>
</head>
<body>
    <?php
date_default_timezone_set('Europe/Tallinn');

function kuvaPraeguneAeg() {
    return date("d.m.Y H:i");
}

function arvutaVanus($synniaasta) {
    $praeguneAasta = date("Y");
    return $praeguneAasta - $synniaasta;
}

function paeviKooliaastaLopuni() {
    $tana = time();
    $aasta = date("Y");
    $kuu = date("n");

    if ($kuu < 7) {
        $lopp = mktime(0, 0, 0, 6, 30, $aasta);
        $kooliAasta = $aasta;
    } else {
        $lopp = mktime(0, 0, 0, 6, 30, $aasta + 1);
        $kooliAasta = $aasta + 1;
    }

    $vahe = $lopp - $tana;
    $paevad = floor($vahe / (60 * 60 * 24));

    return $kooliAasta . " kooliaasta lõpuni on jäänud " . $paevad . " päeva!";
}

function aastaajaPilt() {
    $kuu = date("n");

    if ($kuu == 12 || $kuu == 1 || $kuu == 2) {
        return array(
            "nimi" => "Talv",
            "pilt" => "https://images.unsplash.com/photo-1517299321609-52687d1bc55a"
        );
    } elseif ($kuu >= 3 && $kuu <= 5) {
        return array(
            "nimi" => "Kevad",
            "pilt" => "https://images.unsplash.com/photo-1490750967868-88aa4486c946"
        );
    } elseif ($kuu >= 6 && $kuu <= 8) {
        return array(
            "nimi" => "Suvi",
            "pilt" => "https://images.unsplash.com/photo-1507525428034-b723cf961d3e"
        );
    } else {
        return array(
            "nimi" => "Sügis",
            "pilt" => "https://images.unsplash.com/photo-1507371341162-763b5e419408"
        );
    }
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 8</title>
</head>
<body>

<h2>1. Kuupäev ja kellaaeg</h2>
<?php
echo "Praegune kuupäev ja kellaaeg: " . kuvaPraeguneAeg();
?>

<hr>

<h2>2. Vanuse arvutamine</h2>
<form method="post">
    Sisesta oma sünniaasta:
    <input type="number" name="synniaasta" required>
    <input type="submit" value="Arvuta vanus">
</form>

<?php
if (isset($_POST['synniaasta'])) {
    $synniaasta = (int)$_POST['synniaasta'];
    $vanus = arvutaVanus($synniaasta);
    echo "Kasutaja on või saab sellel aastal " . $vanus . " aastat vanaks.";
}
?>

<hr>

<h2>3. Kooliaasta lõpuni jäänud päevad</h2>
<?php
echo paeviKooliaastaLopuni();
?>

<hr>

<h2>4. Aastaaeg</h2>
<?php
$aastaaeg = aastaajaPilt();
echo "<p>Praegune aastaaeg on: " . $aastaaeg['nimi'] . "</p>";
echo "<img src='" . $aastaaeg['pilt'] . "' alt='" . $aastaaeg['nimi'] . "' width='400'>";
?>
<hr><p>&copy; 2026 | Anri Maidla |</p>
</body>
</html>