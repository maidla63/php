<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülessane 7</title>
</head>
<h1>Kõige lahedam ülessane uuesti ja jälle siin universiumis!</h1>
<body>
<?php
function tervita() {
    return "Tere päiksekesekene!";
}

function uudiskiriVorm() {
    return '
    <form method="post">
        <input type="email" name="uudiskiri_email" placeholder="Sisesta email" required>
        <input type="submit" value="Liitu uudiskirjaga">
    </form>
    ';
}

function kasutajanimi($nimi) {
    return strtolower($nimi);
}

function looEmail($nimi) {
    return strtolower($nimi) . "@hkhk.edu.ee";
}

function looParool($pikkus = 7) {
    $tahedNumbrid = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $parool = "";

    for ($i = 0; $i < $pikkus; $i++) {
        $parool .= $tahedNumbrid[rand(0, strlen($tahedNumbrid) - 1)];
    }

    return $parool;
}

function arvudeVahemik($algus, $lopp, $samm = 1) {
    $tulemus = "";

    for ($i = $algus; $i <= $lopp; $i += $samm) {
        $tulemus .= $i . " ";
    }

    return $tulemus;
}

function ristkulikuPindala($laius, $korgus) {
    return $laius * $korgus;
}

function kontrolliIsikukoodi($ik) {
    if (strlen($ik) != 11) {
        return "Isikukood ei ole õige pikkusega";
    }

    $esimene = substr($ik, 0, 1);
    $aasta = substr($ik, 1, 2);
    $kuu = substr($ik, 3, 2);
    $paev = substr($ik, 5, 2);

    if ($esimene == 1 || $esimene == 2) {
        $sajand = "18";
    } elseif ($esimene == 3 || $esimene == 4) {
        $sajand = "19";
    } elseif ($esimene == 5 || $esimene == 6) {
        $sajand = "20";
    } else {
        return "Tundmatu isikukood";
    }

    if ($esimene % 2 == 0) {
        $sugu = "Naine";
    } else {
        $sugu = "Mees";
    }

    return "Isikukood on õige pikkusega<br>Sugu: $sugu<br>Sünniaeg: $paev.$kuu.$sajand$aasta";
}

function heaMote() {
    $alus = array("Õpetaja", "Õpilane", "Programmeerija");
    $oeldis = array("armastab", "uurib", "kirjutab");
    $sihitis = array("koodi", "raamatut", "veebilehte");

    $a = $alus[rand(0, count($alus) - 1)];
    $b = $oeldis[rand(0, count($oeldis) - 1)];
    $c = $sihitis[rand(0, count($sihitis) - 1)];

    return $a . " " . $b . " " . $c . ".";
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 7</title>
</head>
<body>

<h2>1. Tervitus</h2>
<?php
echo tervita();
?>

<hr>

<h2>2. Liitu uudiskirjaga</h2>
<?php
echo uudiskiriVorm();

if (isset($_POST['uudiskiri_email'])) {
    echo "Sisestatud email: " . $_POST['uudiskiri_email'];
}
?>

<hr>

<h2>3. Kasutajanimi ja email</h2>
<form method="post">
    Sisesta kasutajanimi:
    <input type="text" name="kasutajanimi" required>
    <input type="submit" value="Loo andmed">
</form>

<?php
if (isset($_POST['kasutajanimi'])) {
    $nimi = $_POST['kasutajanimi'];
    echo "Väikeste tähtedega kasutajanimi: " . kasutajanimi($nimi) . "<br>";
    echo "Email: " . looEmail($nimi) . "<br>";
    echo "7-kohaline kood: " . rand(1000000, 9999999) . "<br>";
    echo "Parool: " . looParool() . "<br>";
}
?>

<hr>

<h2>4. Arvud</h2>
<form method="get">
    Algus:
    <input type="number" name="algus" required><br><br>
    Lõpp:
    <input type="number" name="lopp" required><br><br>
    Samm:
    <input type="number" name="samm" value="1" required><br><br>
    <input type="submit" value="Genereeri arvud">
</form>

<?php
if (isset($_GET['algus']) && isset($_GET['lopp']) && isset($_GET['samm'])) {
    $algus = (int)$_GET['algus'];
    $lopp = (int)$_GET['lopp'];
    $samm = (int)$_GET['samm'];

    echo "Tulemus: " . arvudeVahemik($algus, $lopp, $samm);
}
?>

<hr>

<h2>5. Ristküliku pindala</h2>
<form method="get">
    Laius:
    <input type="number" name="laius" required><br><br>
    Kõrgus:
    <input type="number" name="korgus" required><br><br>
    <input type="submit" value="Arvuta pindala">
</form>

<?php
if (isset($_GET['laius']) && isset($_GET['korgus'])) {
    $laius = (int)$_GET['laius'];
    $korgus = (int)$_GET['korgus'];

    echo "Ristküliku pindala on: " . ristkulikuPindala($laius, $korgus);
}
?>

<hr>

<h2>6. Isikukood</h2>
<form method="post">
    Sisesta isikukood:
    <input type="text" name="isikukood" required>
    <input type="submit" value="Kontrolli">
</form>

<?php
if (isset($_POST['isikukood'])) {
    echo kontrolliIsikukoodi($_POST['isikukood']);
}

function headMotted() {
    $alus = array("Mustanahaline", "Alaealine Tüdruk", "Kuri Õpetaja");
    $oeldis = array("loeb", "kirjutab", "vaatab");
    $sihitis = array("raamatut", "koodi", "filmi");

    $juhuslikAlus = $alus[rand(0, count($alus) - 1)];
    $juhuslikOeldis = $oeldis[rand(0, count($oeldis) - 1)];
    $juhuslikSihitis = $sihitis[rand(0, count($sihitis) - 1)];

    return $juhuslikAlus . " " . $juhuslikOeldis . " " . $juhuslikSihitis . ".";
}

echo "<h2>7. Head mõtted</h2>";
echo headMotted();
?>
<hr>
<p>&copy; 2026 | Anri Maidla |</p>
</body>
</html>