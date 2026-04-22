<?php

$valik = $_GET['calc'] ?? '';  

?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <title>yl03</title>
</head>
<body>

<h1>Ülesanne 3</h1>

<h2>Trapetsi pindala</h2>
<form method="get" action="">
    <input type="hidden" name="calc" value="trapets">

    a: <input type="number" name="a" step="0.1" min="0.1" required><br>
    b: <input type="number" name="b" step="0.1" min="0.1" required><br>
    h: <input type="number" name="h" step="0.1" min="0.1" required><br><br>

    <input type="submit" value="Arvuta trapets">
</form>

<hr>

<h2>Rombi ümbermõõt</h2>
<form method="get" action="">
    <input type="hidden" name="calc" value="romb">

    külg s: <input type="number" name="s" step="0.1" min="0.1" required><br><br>

    <input type="submit" value="Arvuta romb">
</form>

<hr>

<h2>Tulemus</h2>

<?php

if ($valik == 'trapets') {
    
    $a = isset($_GET['a']) ? (float)$_GET['a'] : 0;
    $b = isset($_GET['b']) ? (float)$_GET['b'] : 0;
    $h = isset($_GET['h']) ? (float)$_GET['h'] : 0;

    $summa = $a + $b;
    $trapetsPindala = ($summa / 2) * $h;

    echo "<p>Trapetsi pindala on " . number_format($trapetsPindala, 1, '.', '') . ".</p>";


} 
elseif ($valik == 'romb') {

    $s = isset($_GET['s']) ? (float)$_GET['s'] : 0;

    $kordaja = 4;
    $rombYmber = $kordaja * $s;

    echo "<p>Rombi ümbermõõt on " . number_format($rombYmber, 1, '.', '') . ".</p>";

} 
else {
    echo "<p>Täida üks vorm ja vajuta arvuta.</p>";
}

?>

</body>
</html>