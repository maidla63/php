<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ülesanne 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">

  <h1 class="mb-4">Ülesanne 5</h1>

  <?php
  // -----------------------------
  // 1) Tüdrukud
  // -----------------------------
  echo "<h2>1) Tüdrukud</h2>";

  $tydrukud = array("Mari", "Kati", "Liis", "Laura", "Ann", "Eve", "Kadri", "Merle");
  sort($tydrukud); 

  echo "<p><b>Sorteeritud nimed (ridade kaupa):</b></p>";
  foreach ($tydrukud as $nimi) {
    echo $nimi . "<br>";
  }

  echo "<p class='mt-3'><b>Esimesed 3 nime:</b> ";

  echo $tydrukud[0] . ", " . $tydrukud[1] . ", " . $tydrukud[2];
  echo "</p>";

  echo "<p><b>Viimane nimi:</b> ";
  echo $tydrukud[count($tydrukud) - 1];
  echo "</p>";

  $suvalineIndex = rand(0, count($tydrukud) - 1);
  echo "<p><b>Suvaline nimi:</b> " . $tydrukud[$suvalineIndex] . "</p>";

  // -----------------------------
  // 2) Autod + VIN
  // -----------------------------
  echo "<hr><h2>2) Autod ja VIN</h2>";

  $autod = array(
    "Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
    "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
    "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
    "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
    "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
    "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford"
  );

  $vin = array(
    "1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570",
    "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049",
    "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665",
    "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355",
    "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662",
    "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043",
    "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691",
    "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293",
    "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744",
    "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051",
    "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172",
    "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452",
    "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024",
    "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295",
    "1N6AA0EDXFN868772", "WBADW3C59DJ422810"
  );

  echo "<p><b>Autode arv:</b> " . count($autod) . "</p>";

  if (count($autod) == count($vin)) {
    echo "<p class='text-success'><b>Massiivid on ühepikkused.</b></p>";
  } else {
    echo "<p class='text-danger'><b>Massiivid EI ole ühepikkused!</b> Autod: ".count($autod).", VIN: ".count($vin)."</p>";
  }

  $toyota = 0;
  $audi = 0;
  foreach ($autod as $mark) {
    if ($mark == "Toyota") $toyota++;
    if ($mark == "Audi") $audi++;
  }
  echo "<p><b>Toyotasid:</b> $toyota<br><b>Audisid:</b> $audi</p>";

  echo "<p><b>VIN koodid, mille pikkus &lt; 17:</b></p>";
  echo "<ul>";
  foreach ($vin as $v) {
    if (strlen($v) < 17) {
      echo "<li>$v (pikkus: " . strlen($v) . ")</li>";
    }
  }
  echo "</ul>";

  // -----------------------------
  // 3) Keskmised palgad 2018
  // -----------------------------
  echo "<hr><h2>3) Keskmised palgad (2018)</h2>";

  $palgad2018 = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);

  $summa = 0;
  foreach ($palgad2018 as $p) {
    $summa += $p;
  }
  $keskmine = $summa / count($palgad2018);
  echo "<p><b>2018 keskmine palk:</b> " . round($keskmine, 2) . "</p>";

  // -----------------------------
  // 4) Firmad: sort + eemaldamine nime järgi
  // -----------------------------
  echo "<hr><h2>4) Firmad</h2>";

  $firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");
  sort($firmad);

  if (isset($_GET["remove"]) && $_GET["remove"] != "") {
    $remove = $_GET["remove"];
    $key = array_search($remove, $firmad);
    if ($key !== false) {
      unset($firmad[$key]);
      $firmad = array_values($firmad);
      echo "<div class='alert alert-warning'>Eemaldatud firma: <b>$remove</b></div>";
    } else {
      echo "<div class='alert alert-danger'>Firmat <b>$remove</b> ei leitud.</div>";
    }
  }

  echo "<p><b>Firmade nimekiri:</b></p><ul>";
  foreach ($firmad as $f) {
    echo "<li>$f <a class='btn btn-sm btn-outline-danger ms-2' href='?remove=" . urlencode($f) . "'>Eemalda</a></li>";
  }
  echo "</ul>";

  // -----------------------------
  // 5) Riigid: pikima nime pikkus
  // -----------------------------
  echo "<hr><h2>5) Riigid</h2>";

  $riigid = array(
    "Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
    "Philippines","Canada","Philippines","South Sudan","Brazil",
    "Democratic Republic of the Congo","Indonesia","Syria","Sweden",
    "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
    "Kazakhstan","Cuba","Portugal","Czech Republic"
  );

  $max = 0;
  foreach ($riigid as $r) {
    if (strlen($r) > $max) $max = strlen($r);
  }
  echo "<p><b>Kõige pikema riigi nime märkide arv:</b> $max</p>";

  // -----------------------------
  // 6) Hiina nimed
  // -----------------------------
  echo "<hr><h2>6) Hiina nimed</h2>";

  $hiina = array(
    "瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
    "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
    "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美"
  );
  sort($hiina);

  echo "<p><b>Esimene nimi:</b> " . $hiina[0] . "<br>";
  echo "<b>Viimane nimi:</b> " . $hiina[count($hiina)-1] . "</p>";

  // -----------------------------
  // 7) Google nimed
  // -----------------------------
  echo "<hr><h2>7) Google nimed (otsing)</h2>";

  $google = array(
    "Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett",
    "Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
    "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
    "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
    "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"
  );

  $otsitav = "";
  if (isset($_GET["search"])) $otsitav = trim($_GET["search"]);

  echo '<form class="row g-2 mb-3" method="get">
          <div class="col-sm-6">
            <input class="form-control" name="search" placeholder="Sisesta nimi (nt Reyes)" value="'.htmlspecialchars($otsitav).'">
          </div>
          <div class="col-sm-2">
            <button class="btn btn-primary w-100" type="submit">Otsi</button>
          </div>
        </form>';

  if ($otsitav != "") {
    if (in_array($otsitav, $google)) {
      echo "<div class='alert alert-success'>Nimi <b>$otsitav</b> on nimekirjas olemas.</div>";
    } else {
      echo "<div class='alert alert-danger'>Nime <b>$otsitav</b> ei leitud nimekirjast.</div>";
    }
  }

  // -----------------------------
  // 8) Pildid
  // -----------------------------
  echo "<hr><h2>8) Pildid</h2>";

  $pildid = array("prentice.jpg","freeland.jpg","peterus.jpg","devlin.jpg","gabriel.jpg","pete.jpg");

  echo "<p><b>Kolmas pilt (index 2):</b> ".$pildid[2]."</p>";
  echo "<img class='img-thumbnail mb-3' style='max-width:200px' src='img/".$pildid[2]."' alt='pilt'>";

  echo "<p><b>Kõik pildid:</b></p><ul>";
  foreach ($pildid as $p) {
    echo "<li>$p</li>";
  }
  echo "</ul>";

  echo "<p><b>Pildid</b></p>";
  echo "<div class='row'>";
  foreach ($pildid as $p) {
    echo "<div class='col-6 mb-3'>";
    echo "  <img class='img-fluid rounded border' src='img/$p' alt='$p'>";
    echo "</div>";
  }
  echo "</div>";
?>

</div>
</body>
</html>