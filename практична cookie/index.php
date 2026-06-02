<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: secure.php");
    exit();
}

if (isset($_COOKIE['blocked'])) {
    header("Location: blocked.php");
    exit();
}

header("Location: login.php");
exit();
?>