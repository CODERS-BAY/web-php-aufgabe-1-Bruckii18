<!DOCTYPE html>
<html lang="de">

<head>
    <title>Quadratrechner</title>
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
    <h1>Quadratrechner</h1>
    <main>
        <form action="quadratrechner.php" method="post">
            <div><input type="text" name="numberInput"></div>
            <!-- <div><input type="submit"></div> -->
        </form>
        <?php

        if (!$_POST) {
            echo "Geben Sie eine Zahl ein und drücken Sie die Enter-Taste.";
        } else {
            $ergebnis = doubleval($_POST["numberInput"]) * doubleval($_POST["numberInput"]);
            echo "Die Quadratzahl ist: " . $ergebnis;
        }
        ?>
    </main>

</body>

</html>