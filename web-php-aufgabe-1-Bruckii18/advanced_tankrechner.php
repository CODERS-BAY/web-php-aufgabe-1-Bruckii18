<!DOCTYPE html>
<html lang="de">

<head>
    <title>Advanced Tankrechner</title>
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
        <form action="advanced_tankrechner.php" method="post">
            <div>Normal<input type="radio" name="benzin" value="normal" checked></div>
            <div>Super<input type="radio" name="benzin" value="super"></div>
            <div>Diesel <input type="radio" name="benzin" value="diesel"></div>
            <div>Anzahl Liter: <input type="text" name="input"></div>
            <input type="submit" value="Errechne">
        </form>
        <?php
        if (!$_POST) {
            echo "Geben Sie eine Zahl ein und drücken Sie die Enter-Taste.";
        } else {
            $input = doubleval($_POST["input"]);
            if ($input >= 100) {
                $input = $input * 0.98;
            }
            if ($_POST["benzin"] == "normal") {
                $ergebnis = $input * 1.35;
                echo "Die Benzinrechnung beträgt " . number_format($ergebnis, 2, ',', ' ') . "&euro;";
            } else if ($_POST["benzin"] == "super") {
                $ergebnis = $input * 1.4;
                echo "Die Benzinrechnung beträgt " . number_format($ergebnis, 2, ',', ' ') . "&euro;";
            } else if ($_POST["benzin"] == "diesel") {
                $ergebnis = $input * 1.1;
                echo "Die Benzinrechnung beträgt " . number_format($ergebnis, 2, ',', ' ') . "&euro;";
            }
        }
        ?>
    </main>

</body>

</html>