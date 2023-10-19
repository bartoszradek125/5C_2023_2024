<!DOCTYPE html>
<html>
<head>
    <title>Wynik</title>
</head>
<body>
    <h2>Wynik obliczeń</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pobieranie przesłanych danych z formularza
        $koszt = filter_input(INPUT_POST, 'koszt', FILTER_VALIDATE_FLOAT);
        $kilometry = filter_input(INPUT_POST, 'kilometry', FILTER_VALIDATE_INT);
        $spalanie = filter_input(INPUT_POST, 'spalanie', FILTER_VALIDATE_FLOAT);

        // Sprawdzenie poprawności przesłanych danych
        if ($koszt !== false && $kilometry !== false && $spalanie !== false) {
            // Obliczenie kosztu przejazdu
            $koszt_przejazdu = ($koszt * $kilometry) / 100 * $spalanie;

            // Wyświetlenie przesłanych informacji i kosztu przejazdu
            echo "Koszt benzyny na 100 km: $koszt zł<br>";
            echo "Ilość kilometrów: $kilometry km<br>";
            echo "Średnie spalanie: $spalanie l/100km<br><br>";
            echo "Koszt przejazdu wynosi: $koszt_przejazdu zł";
        } else {
            echo "Błędne dane. Wprowadź poprawne liczby.";
        }
    }
    ?>
</body>
</html>
