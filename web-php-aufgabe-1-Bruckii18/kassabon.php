<!DOCTYPE html>
<html lang="de">

<head>
    <title>Kassabon</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<header>
    <nav>
        <ul>
            <li><a href="kassabon.php">Kassabon</a></li>
            <li><a href="quadratrechner.php">Quadratrechner</a></li>
            <li><a href="tankrechner.php">Tankrechner</a></li>
            <li><a href="advanced_tankrechner.php">Advanced Tankrechner</a></li>
            <li><a href="zahlenreihe.php">Zahlenreihe</a></li>
            <li><a href="kleines_computerspiel.php">Kleines Computerspiel</a></li>
        </ul>
    </nav>
</header>
<?php
$var1 = 22.5;
$var2 = 12.3;
$var3 = 5.2;
$sum = $var1 + $var2 + $var3;
$ust = $sum * 0.2;
$brutto = $sum + $ust;
?>

<body>
    <h1>Kassabon</h1>
    <main>
        <ul>
            <li>
                Artikel 1: € <?php echo number_format($var1, 2, ',', ' ') ?>
            </li>
            <li>
                Artikel 2: € <?php echo number_format($var2, 2, ',', ' ') ?>
            </li>
            <li>
                Artikel 3: € <?php echo number_format($var3, 2, ',', ' ') ?>
            </li>
        </ul>

        <ul>
            <li>
                Nettosumme: € <?php echo number_format($sum, 2, ',', ' ') ?>
            </li>
            <li>
                Umsatzsteuer 20%: € <?php echo number_format($ust, 2, ',', ' ') ?>
            </li>
            <li>
                Bruttosumme: € <?php echo number_format($brutto, 2, ',', ' ') ?>
            </li>
        </ul>
    </main>

</body>

</html>