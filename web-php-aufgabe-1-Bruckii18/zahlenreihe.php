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
    <h1>Zahlenreihe</h1>
    <main>
        <?php
        for ($i = 13; $i <= 29; $i += 4) {
            echo $i . " ";
        }
        echo "</br>";
        for ($i = 2; $i >= -1; $i -= 0.5) {
            echo $i . " ";
        }
        echo "</br>";
        for ($i = 2000; $i <= 6000; $i += 1000) {
            echo $i . " ";
        }
        echo "</br>";
        for ($i = 5; $i <= 13; $i += 2) {
            echo "Z" . $i . " ";
        }
        echo "</br>";
        for ($i = 1; $i <= 3; $i++) {
            echo "a b" . $i . " ";
        }
        echo "</br>";
        for ($i = 0; $i <= 2; $i += 1) {
            for ($j = 2; $j <= 3; $j++) {
                if ($i > 0) {
                    echo "c" . $i . $j . " ";
                } else {
                    echo "c" . $j . " ";
                }
            }
        }
        echo "</br>";
        for ($i = 13; $i <= 45; $i += 4) {
            echo $i . " ";
            if ($i == 21) {
                $i = 29;
            }
        }
        ?>
    </main>
</body>

</html>