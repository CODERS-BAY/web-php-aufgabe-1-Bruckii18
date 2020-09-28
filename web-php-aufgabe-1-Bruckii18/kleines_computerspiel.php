<!DOCTYPE html>
<html lang="de">

<head>
    <title>Zahlenreihe</title>
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
    <h1>Kleines Computerspiel</h1>
    <main>
        <?php
        $playerOne = 0;
        $playerTwo = 0;
        $win = 25;
        while ($win > $playerOne && $win > $playerTwo) {
            $playerOneDice = random_int(1, 6);
            $playerOne += $playerOneDice;
            echo "Spieler 1 würfelt eine " . $playerOneDice . " und hat nun " . $playerOne . " Punkte." . "</br>";
            $playerTwoDice = random_int(1, 6);
            $playerTwo += $playerTwoDice;
            echo "Spieler 2 würfelt eine " . $playerTwoDice . " und hat nun " . $playerTwo . " Punkte." . "</br>";
        }
        if ($playerOne > $playerTwo) {
            echo "Spieler 1 hat das Spiel mit " . $playerOne . " Punkten gewonnen.";
        } else if ($playerOne < $playerTwo) {
            echo "Spieler 2 hat das Spiel mit " . $playerTwo . " Punkten gewonnen.";
        } elseif ($playerOne == $playerTwo) {
            echo "Untentschieden! Beide haben " . $playerOne . " Punkte.";
        }
        ?>
    </main>
</body>

</html>