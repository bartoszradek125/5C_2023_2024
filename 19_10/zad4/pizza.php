<!DOCTYPE html>
<html>
<head>
    <title>Wynik</title>
</head>
<body>
    <h2>Wynik obliczen</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pobieranie przesłanych danych z formularza
        $odleglosc = filter_input(INPUT_POST, 'odleglosc', FILTER_VALIDATE_INT);
        $ciepla = isset($_POST['ciepla']) ? true : false;

        // Sprawdzenie poprawności przesłanych danych
        if ($odleglosc !== false) {
            // Obliczenie kosztu dowozu
            $koszt_dowozu = $odleglosc * 50; // 50 groszy za km

            if ($ciepla) {
                $koszt_dowozu += $koszt_dowozu * 0.15; // Dodatkowe 15% za dostawę ciepłą
            }

            // Wyświetlenie przesłanych informacji i kosztu dowozu
            echo "Odległość: $odleglosc km<br>";
            echo "Dostawa ciepła: " . ($ciepla ? "Tak" : "Nie") . "<br><br>";
            echo "Koszt dowozu wynosi: " . number_format($koszt_dowozu / 100, 2) . " zł";
        } else {
            echo "Błędne dane. Wprowadź poprawną odległość w kilometrach.";
        }
    }
    ?>
</body>
</html>
