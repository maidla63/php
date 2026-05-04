<?php

function v($k){
  return trim($_GET[$k] ?? '');
}

function n($k){
  $tmp = v($k);
  return ($tmp !== '' && is_numeric($tmp)) ? (float)$tmp : null;
}

$action = v('do');

echo "<!doctype html><html lang='et'><head><meta charset='utf-8'><title>yl04</title></head><body>";

echo "<h1>Ülesanne 4</h1>";/


echo "<h2>1) Jagamine</h2>";
echo "<form method='get'>
<input type='hidden' name='do' value='jaga'>
A: <input type='number' name='a' required>
B: <input type='number' name='b' required>
<input type='submit' value='Arvuta'>
</form>";

if($action == 'jaga'){
  $a = n('a');
  $b = n('b');

  if($a === null || $b === null){
    echo "<p>Viga: täida mõlemad lahtrid.</p>";
  } else if($b == 0){
    echo "<p>Hoiatus: nulliga jagada ei saa!</p>";
  } else {
    $res = $a / $b;
    echo "<p>Tulemus: $a / $b = ".number_format($res,2,'.','')."</p>";
  }
}
echo "<hr>";


echo "<h2>2) Vanus</h2>";
echo "<form method='get'>
<input type='hidden' name='do' value='vanus'>
Vanus 1: <input type='number' name='v1' min='0' required>
Vanus 2: <input type='number' name='v2' min='0' required>
<input type='submit' value='Võrdle'>
</form>";

if($action == 'vanus'){
  $v1 = n('v1');
  $v2 = n('v2');

  if($v1 === null || $v2 === null){
    echo "<p>Viga: täida mõlemad lahtrid.</p>";
  } else if($v1 > $v2){
    echo "<p>Esimene on vanem.</p>";
  } else if($v2 > $v1){
    echo "<p>Teine on vanem.</p>";
  } else {
    echo "<p>Nad on ühevanused.</p>";
  }
}
echo "<hr>";


echo "<h2>3) Ristkülik või ruut</h2>";
echo "<form method='get'>
<input type='hidden' name='do' value='kuju'>
X: <input type='number' name='x' step='0.1' min='0.1' required>
Y: <input type='number' name='y' step='0.1' min='0.1' required>
<input type='submit' value='Otsusta'>
</form>";

if($action == 'kuju'){
  $x = n('x');
  $y = n('y');

  if($x === null || $y === null){
    echo "<p>Viga: täida mõlemad küljed.</p>";
  } else {
    if($x == $y){
      echo "<p>See on ruut.</p>";
    } else {
      echo "<p>See on ristkülik.</p>";
    }
  }
}
echo "<hr>";


echo "<h2>4) Ristkülik või ruut II (joonista *)</h2>";
echo "<form method='get'>
<input type='hidden' name='do' value='draw'>
Laius: <input type='number' name='w' min='1' max='30' required>
Kõrgus: <input type='number' name='h2' min='1' max='15' required>
<input type='submit' value='Joonista'>
</form>";

if($action == 'draw'){
  $w = n('w');
  $h2 = n('h2');

  if($w === null || $h2 === null){
    echo "<p>Viga: täida laius ja kõrgus.</p>";
  } else {
    if($w == $h2){
      echo "<p>Kuvatakse ruut.</p>";
    } else {
      echo "<p>Kuvatakse ristkülik.</p>";
    }

    echo "<pre>";
    for($i = 0; $i < (int)$h2; $i++){
      echo str_repeat("*", (int)$w) . "\n";
    }
    echo "</pre>";
  }
}
echo "<hr>";


echo "<h2>5) Juubel</h2>";
echo "<form method='get'>
<input type='hidden' name='do' value='juubel'>
Sünniaasta: <input type='number' name='synniaasta' min='1900' max='".date('Y')."' required>
<input type='submit' value='Kontrolli'>
</form>";

if($action == 'juubel'){
  $sy = n('synniaasta');

  if($sy === null){
    echo "<p>Viga: sisesta sünniaasta.</p>";
  } else {
    $vanus = (int)date('Y') - (int)$sy;

    if($vanus > 0 && $vanus % 5 === 0){
      echo "<p>On juubel: saad $vanus.</p>";
    } else {
      echo "<p>Ei ole juubel. Vanus: $vanus.</p>";
    }
  }
}
echo "<hr>";


echo "<h2>6) Hinne (switch)</h2>";
echo "<form method='get'>
<input type='hidden' name='do' value='hinne'>
KT punktid: <input type='text' name='punktid' required>
<input type='submit' value='Hinda'>
</form>";

if($action == 'hinne'){
  $raw = v('punktid');

  if($raw === '' || !is_numeric($raw)){
    echo "<p>SISESTA OMA PUNKTID!</p>";
  } else {
    $p = (float)$raw;

    switch(true){
      case ($p > 10):
        echo "<p>SUPER!</p>";
        break;

      case ($p >= 5 && $p <= 9):
        echo "<p>TEHTUD!</p>";
        break;

      case ($p < 5):
        echo "<p>KASIN!</p>";
        break;

      default:
        echo "<p>SISESTA OMA PUNKTID!</p>";
    }
  }
}

echo "</body></html>";
?>