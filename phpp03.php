<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


    <h1>harj 07</h1>
    <h2>tervitus</h2>
    <?php
    function tervita() {
        echo "Tere päiksekesekene!<br>";
    }
    tervita();
    ?>
    <hr>
    <?php
    function uudiskirja_vorm() {
        echo '
        <form class="row g-2 align-items-center" style="max-width: 400px;">
            <div class="col-auto">
                <input type="email" class="form-control" placeholder="sinu email" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">liitu uudiskirjaga</button>
            </div>
        </form>';
    }
    echo uudiskirja_vorm();
    ?>
    <h1>harj 06</h1>
    <h2>arvud 1-100</h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        echo $i . ". ";
        if ($i % 10 == 0) echo "<br>";
    }
    ?>
    <hr>
    <h2>rida</h2>
    <?php
    for ($i = 0; $i < 10; $i++) echo "*";
    echo "<br><br>";
    ?>
    <hr>
    <h2>rida 2</h2>
    <?php
    for ($i = 0; $i < 10; $i++) echo "*<br>";
        echo "<br>";
    ?>
    <hr>
    <h2>ruut</h2>
    <?php
    $s = $_GET['s'] ?? 0;
    echo '<form><input type="number" name="s"><button>Ruut</button></form><pre>';
    for ($r = 0; $r < $s; $r++) {
        for ($v = 0; $v < $s; $v++) echo "* ";
        echo "\n";
    }
    echo '</pre>';
    ?>
    <hr>
    <h2>kahanev</h2>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        if ($i % 2 == 0) echo $i . " ";
        }
    ?>
    <hr>
    <h2>3 jagamine</h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) echo $i . ", ";
        }
    ?>
    <hr>
    <h2>masiiv ja tsykkel poisid ja tydrukud</h2>
    <?php
    $p = ["benno", "viilma", "priit"];
    $t = ["Pelle", "Aare", "Sangar"];
    for ($i = 0; $i < count($p); $i++) {
        echo $p[$i] . " ja " . $t[$i] . "<br>";
    }
    ?>
    <?php
    
    ?>
    <?php
    
    
    ?>
    <br>
    <h1>harj 05</h1>
    <h2>pildid</h2>
    <?php
        $img = array("pete.jpg","peterus.jpg","freeland.jpg","devlin.jpg","gabriel.jpg","prentice.jpg");
        echo '<h3> kolmas pilt </h3>';
        printf('<img src="Img\%s" alt=""> <br>', $img[2]);
        $value = 0;
            echo'<div class="container text-center">
        <div class="row align-items-start justify-content-end">';
        foreach($img as $image){
            printf('<div class="col"><img src="Img\%s" alt=""  style="width:100px;height:100px;"></div>', $img[$value]);
            $value++;
        }
            echo '  </div>
        </div>';
    ?>
    <hr>
    <h2>otsing</h2>
    <form><input type="text" name="o" required><input type="submit" value="Otsi"></form>
    <?php
    $n = ["Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin","Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins","Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey","Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"];
    if(isset($_GET['o'])) {
        $s = trim($_GET['o']);
        echo in_array($s, $n) ? "<div class='alert alert-success'>Nimi $s on olemas!</div>" : "<div class='alert alert-danger'>Nime $s ei leitud.</div>";
    }
    ?>
    <hr>
    <h2>riigid</h2>
    <?php
    $r = ["Indonesia","Canada","Kyrgyzstan","Germany","Philippines","Philippines","Canada","Philippines","South Sudan","Brazil","Democratic Republic of the Congo","Indonesia","Syria","Sweden","Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France","Kazakhstan","Cuba","Portugal","Czech Republic"];
    echo "pikima riigi pikkus: " . max(array_map('strlen', $r)) . "<br>";
    ?>
    <hr>
    <h2>hiina </h2>
    <?php
    $h = ["瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳","思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪","璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美"];
    sort($h);
    echo "esimene: " . $h[0] . ". viimane: " . $h[count($h)-1] . "<br>";
    ?>

    <br>
    <hr>

    <h2>firmad</h2>
    <form action="">
        eemalda firma <input type="text" name="firma_eemaldada" id="">
        <input type="submit" value="eemalda firma"><br>
    </form>
    <?php
    $firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");

    if (!empty($_GET) && isset($_GET["firma_eemaldada"])) {
        $firma_eemaldada = $_GET["firma_eemaldada"];
        $firmad = array_diff($firmad, [$firma_eemaldada]);
    }

    foreach($firmad as $firma){
        echo $firma . ", ";
    }
    ?>
    <hr>

    <h2>palgad</h2>
    <?php
    $palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
    echo "keskmine palk aastal 2018 oli: " . array_sum($palgad) / count($palgad) . "<br>";
    ?>
    <hr>

    <h2>autod</h2>

    <?php
    $cars = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
    "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
    "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
    "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
    "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
    "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");
        $vins = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
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
    "1N6AA0EDXFN868772", "WBADW3C59DJ422810");
    echo "autode arv: ".count($cars). "<br>";
    if (count($cars) == count($vins)) {
        echo "autode ja vinide arv on võrdsed<br>";
    } else {
        echo "autode ja vinide arv pole võrdsed<br>";
    }
    echo "Toyotad kokku: " . array_count_values($cars)["Toyota"]. "<br>";
    echo "Audi kokku: " . array_count_values($cars)["Audi"]. "<br>";
    ?>
    <hr>

    <h2>Masiiv</h2>
    <?php
        $tydrukud = array('mari', 'kati', 'juhan', 'miku', 'uku', 'viilma', 'indrek', 'ben');
        sort($tydrukud);
        $counter = 0;
        echo "<ul>";
        foreach($tydrukud as $tydruk){
            if ($counter==3){
                break;
            }
            echo "<li>$tydruk</li>";
            $counter++;
        }
    echo "</ul>";
    echo "viimane: ".$tydrukud[count($tydrukud)-1];
    echo "<br>";
    echo "Suvaline: " .$tydrukud[random_int(0, count($tydrukud)-1)];
    echo "<br>";
    ?>
    <hr>

    <h1>harj 04</h1>
    <h2>jagamine</h2>
    <form><input type="number" name="a" required><input type="number" name="b" required><input type="submit"></form>
    <?php
    if (isset($_GET['a'], $_GET['b']) && $_GET['b'] !== '') {
        echo $_GET['b'] == 0 ? "nulliga ei saa jagada" : $_GET['a'] . " / " . $_GET['b'] . " = " . ($_GET['a'] / $_GET['b']);
    }
    ?>
    <hr>

    <h2>vanus</h2>
    <form><input type="number" name="v1" required><input type="number" name="v2" required><input type="submit"></form>
    <?php
    if (!empty($_GET['v1']) && !empty($_GET['v2'])) {
        if ($_GET['v1'] > $_GET['v2']) echo "esimene on vanem.";
        elseif ($_GET['v2'] > $_GET['v1']) echo "teine on vanem.";
        else echo "uhevanused.";
    }
    ?>
    <hr>

    <h2>ristkülik voi ruut</h2>
    <form><input type="number" name="a" required><input type="number" name="b" required><input type="submit"></form>
    <?php
    if (!empty($_GET['a']) && !empty($_GET['b'])) {
        echo $_GET['a'] == $_GET['b'] ? "ruut" : "ristkulik";
        echo "<div style='width:{$_GET['a']}px; height:{$_GET['b']}px; background:blue;'></div>";
    }
    ?>
    <hr>

    <h2>juubel</h2>
    <form><input type="number" name="y" required><input type="submit"></form>
    <?php
    if (!empty($_GET['y'])) {
        $v = 2026 - $_GET['y'];
        echo "Vanus: $v. " . ($v % 5 == 0 ? "juubel" : "ei ole juubel");
    }
    ?>
    <hr>

    <h2>punktid</h2>
    <form><input type="text" name="p"><input type="submit"></form>
    <?php
    if (isset($_GET['p'])) {
        $p = trim($_GET['p']);
        if ($p === "" || !is_numeric($p)) echo "sisesta punktid";
        else {
            switch (true) {
                case ($p > 10): echo "SUPER"; break;
                case ($p >= 5 && $p <= 9): echo "TEHTUD"; break;
                case ($p < 5): echo "kasin"; break;
                default: echo "tehtud"; break;
            }
        }
    }
    ?>

    <hr>

    <h1>harj 03</h1>
    <h2>rombi ymbermoot</h2>
    <form action="" method="get">kylg: <input type="number" name="kylg"><input type="submit" value="arvuta"></form>
    <?php
    if (!empty($_GET) && isset($_GET['kylg'])) {
        $kylg = $_GET['kylg'];
        $ymbermoot = $kylg * 4;
        echo "rombi ümbermõõt: " . $ymbermoot . "<br>";
    }

    ?>
    <hr>
    <h2>trapets pind</h2>
    <form action="" method="get">
        a: <input type="number" name="a"><br>
        b: <input type="number" name="b"><br>
        h: <input type="number" name="h"><br>
        <input type="submit" value="arvuta">
    </form>
    <?php
    if (!empty($_GET) && isset($_GET['a'], $_GET['b'], $_GET['h'])) {        $a = $_GET['a'];
        $b = $_GET['b'];
        $h = $_GET['h'];
        $s = (($a+$b)/2) * $h;
        echo "trapets pindala on: ".$s."<br>";
    }
    
    ?>

    <hr>

    <br>
    <h1>harj 02</h1>
    <?php
    $a = 17;
    $b = 5;

    echo $a . " + " . $b . " = " . ($a + $b) . "<br>";
    echo $a . " - " . $b . " = " . ($a - $b) . "<br>";
    echo $a . " * " . $b . " = " . ($a * $b) . "<br>";
    echo $a . " / " . $b . " = " . ($a / $b) . "<br>";
    echo $a . " % " . $b . " = " . ($a % $b) . "<br>";

    $mm = 1234;
    $cm = $mm / 10;
    $m = $mm / 1000;

    echo $mm . " mm on " . number_format($cm, 2, '.', '') . " cm.<br>";
    echo $mm . " mm on " . number_format($m, 2, '.', '') . " m.<br>";

    $a = 3;
    $b = 4;
    $c = sqrt($a * $a + $b * $b);

    $ymbermoot = $a + $b + $c;
    $pindala = ($a * $b) / 2;

    echo "Täisnurkse kolmnurga ümbermõõt on " . round($ymbermoot) . ".<br>";
    echo "Täisnurkse kolmnurga pindala on " . round($pindala) . ".<br>";
    ?>

    <br>
    <hr>

    <h1>harj 01</h1>
    <?php
    $nimi = "aallas";

    echo $nimi . PHP_EOL . PHP_EOL . PHP_EOL;

    echo "valjasta jargnev lause: “Tere Maailm!” <br>";

    echo "  /\_/\ <br>";
    echo " ( o.o ) <br>";
    echo "  > ^ < <br>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>