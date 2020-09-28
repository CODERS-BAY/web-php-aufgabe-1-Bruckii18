<!DOCTYPE html>
<html lang="de">

<head>
    <title>Tankrechner</title>
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

<body>
    <h1>Tankrechner</h1>
    <main>
        <p>Lassen Sie sich den Gesamtpreis ihrer getankten Liter ausgeben indem Sie einfach die Liter in die dementsprechenden Felder eingeben.</p>
        <form action="tankrechner.php" method="post">
            <div>Normalliter: <input type="text" name="normalInput"></div>
            <div>Superliter: <input type="text" name="superInput"></div>
            <input type="submit" value="Errechne">
        </form>
        <?php
        if (!$_POST) {
            echo "Geben Sie eine Zahl ein und drücken Sie die Enter-Taste.";
        } else {
            $normalInput = doubleval($_POST["normalInput"]);
            $superInput = doubleval($_POST["superInput"]);
            if ($normalInput != null && $superInput != null) {
                $ergebnis = $normalInput * 1.35;
                echo "Die Benzinrechnung für Normal beträgt " . number_format($ergebnis, 2, ',', ' ') . "&euro;" . "</br>";
                $ergebnis2 = $superInput * 1.4;
                echo "Die Benzinrechnung für Super beträgt " . number_format($ergebnis2, 2, ',', ' ') . "&euro;";
            } else if ($normalInput != null) {
                $ergebnis = $normalInput * 1.35;
                echo "Die Benzinrechnung für Normal beträgt " . number_format($ergebnis, 2, ',', ' ') . "&euro;";
            } else if ($superInput != null) {
                $ergebnis = $superInput * 1.4;
                echo "Die Benzinrechnung für Super beträgt " . number_format($ergebnis, 2, ',', ' ') . "&euro;";
            }
        }
        ?>
    </main>

</body>

</html>