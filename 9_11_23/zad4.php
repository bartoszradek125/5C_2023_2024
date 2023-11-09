<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liczby kolejne PHP3</title>
</head>
<body>
    <?php
    for ($i = 1; $i <=10; $i++) {
        $squareRoot = sqrt($i);
        echo "Liczba: $i, Pierwiastek kwadratowy: $squareRoot <br>";
    }
    ?>
</body>
</html>