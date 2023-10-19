<!DOCTYPE html>
<html lang="pl">
<html>
<head>
    <title>Kolory</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tlo = $_POST['tlo'];
        $tekst = $_POST['tekst'];

        if (preg_match('/^#[0-9A-Fa-f]{6}$/', $tlo) && preg_match('/^#[0-9A-Fa-f]{6}$/', $tekst)) {
            echo '<p style="height: 50%; width: 50%; margin: 50px auto 0 auto; border: 2px dashed red; background-color: ' . $tlo . '; color: ' . $tekst . ';">';
            echo 'Bartosz Radek';
            echo '</p>';
        } else {
            echo 'Błędny format koloru. Kolor powinien być w formie 6-cyfrowej liczby szesnastkowej, na przykład #FF0000.';
        }
    }
    ?>
</body>
</html>
