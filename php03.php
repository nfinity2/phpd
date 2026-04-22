<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>harj 03</h1>
    <h2>rombi ymbermoot</h2>
    <form action="" method="get">kylg: <input type="number" name="kylg"><input type="submit" value="arvuta"></form>
    <?php
    if (!empty($_GET)) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $h = $_GET['h'];
        $s = (($a+$b)/2) * $h;
        echo "trapets pindala on: ".$s."<br>";
    }
    
    ?>
    <h2>trapets pind</h2>
    <form action="" method="get">
        a: <input type="number" name="a"><br>
        b: <input type="number" name="b"><br>
        h: <input type="number" name="h"><br>
        <input type="submit" value="arvuta">
    </form>
    <?php
    if (!empty($_GET)) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $h = $_GET['h'];
        $s = (($a+$b)/2) * $h;
        echo "trapets pindala on: ".$s."<br>";
    }
    
    ?>
</body>
</html>