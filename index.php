<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Harjutus 10 - Dünaamiline leht</title>
</head>

<body>

    <h1>veebileht</h1>

    <nav>
        <a href="index.php">Avaleht</a>
        <a href="index.php?leht=teenused">Teenused</a>
        <a href="index.php?leht=kontakt">Kontakt</a>
        <a href="index.php?leht=meist">Meist</a>
    </nav>

<div class="sisu">
        <?php
        $lubatud_lehed = [
            'avaleht' => 'avaleht',
            'teenused' => 'teenused',
            'kontakt' => 'kontakt aallas@hkhk.edu.ee',
            'meist' => 'IT-25 opilane haapsalu kutsehariduskesksuesesesese',
        ];

        $leht = $_GET['leht'] ?? 'avaleht';

        if (array_key_exists($leht, $lubatud_lehed)) {
            echo $lubatud_lehed[$leht];
        } else {
            echo "<span class='error'>Viga 404: Antud lehte ei eksisteeri või juurdepääs on keelatud!</span>";
        }
        ?>
    </div>

</body>
</html>