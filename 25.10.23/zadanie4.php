<?php
if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3600, "/");
    echo "Plik cookie 'username' zostal usuniety.";
}
else {
    echo"Plik cookie 'username' nie istnieje.";
}
?>