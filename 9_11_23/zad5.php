<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorytm</title>
</head>
<body>
    <?php
    $function = function($x) {
        return $x * $x;
    };
    $start = 0;
    $end = 10;
    $precision = 0.001;
    $result = null;
    $iterations = 0;
    while (($end - $start) > $precision) {
        $midpoint = ($start + $end) / 2;
        $fMidpoint = $function($midpoint);

        if ($fMidpoint == 0.0) {
            $result = $midpoint;
            break;
        } elseif ($fMidpoint * $function($start) < 0){
            $end = $midpoint;
        } else {
            $start = $midpoint;
        }
        $iterations++;
    }
    echo "Wynik: $result, Iteracje: $iterations";
    ?>
</body>
</html>