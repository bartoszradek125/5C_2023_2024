<?php
if(!isset($_COOKIE['username'])) {
$_COOKIE['username'];
    echo "Zawartość ciasteczka 'username' to: ";
} else {
    echo "Zawartość ciasteczka 'username' nie istnieje.";
}
?>