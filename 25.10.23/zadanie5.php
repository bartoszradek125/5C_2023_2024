<?php
if(!isset($_COOKIE['hits'])) {
    $ile = 1;
} else {
    $ile = (int)$_COOKIE['hits'];
    if($ile < 1)
    $ile = 1;
    $ile++;
}
setcookie("hits,$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="widht=device-width, initial-scale=1.0">
<title>Licznik odwiedzin-cookie</title>
</head>
<body>
    <p>
        <?php
        if($ile == 1)
        $str = "raz";
        else
        $str = "razy";
        echo "witamy, odwiedziles nas $ile $str. <br>";
        if($ile == 5) {
            echo "Gratulacje";
        }
        ?>
    </p>
</body>
</html>