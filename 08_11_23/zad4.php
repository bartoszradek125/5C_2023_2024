<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mniejsza wieksza</title>
</head>
<body>
<?php
    $a = 33;
    $b = -17;
    if ($a < $b) {
        echo "$a jest mniejsze od $b";
    } elseif ($a == $b) {
        echo "$a jest rowne $b";
    } else {
        echo "$a jest wieksze od $b";
    }
    ?>
</body>
</html>