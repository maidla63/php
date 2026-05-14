<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülessane 6</title>
</head>
<h1>Kõige lahedam ülessane siin universiumis!</h1>
<body>
<?php
  echo "<hr><h2>1) 100 arvu genereeritud</h2>";

for ($i = 1; $i <= 100; $i++) {
    echo $i . ". ";

    if ($i % 10 == 0) {
        echo "<br>";
    }
}
  echo "<hr><h2>2) Horisontaalne tärniridad</h2>";

for ($i = 1; $i <= 10; $i++) {
    echo "*";
}

echo "<hr><h2>3) Horisontaalne tärniridad</h2>";

for ($i = 1; $i <= 10; $i++) {
    echo "*<br>";
}

echo "<hr><h2>4) Tärnidest ruut. Vormis saab valida suurust.";
?>

<form method="get">
    Sisesta ruudu suurus:
    <input type="number" name="suurus" min="1">
    <input type="submit" value="Loo ruut">
</form>

<?php
if (isset($_GET['suurus'])) {
    $suurus = (int)$_GET['suurus'];

    for ($rida = 1; $rida <= $suurus; $rida++) {
        for ($veerg = 1; $veerg <= $suurus; $veerg++) {
            echo "* ";
        }
        echo "<br>";
    }
}

echo "<hr><h2>5) Kahanev – väljasta paarisarvud 10-1";

for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}
?>
<hr>
<p>&copy; 2026 | Anri Maidla |</p>
</body>
</html>