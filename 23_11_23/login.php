<?php
session_start();
if(isset($_SESSION['uzytkownik'])) {
    header("Location: menu.php");
    exit();
}
>?