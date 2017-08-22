<?php

session_start();

<<<<<<< HEAD

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_unset();
=======
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['UserId'])) {
>>>>>>> 7744e298f2370f4b75ae6c8e700db924c1c52fca
    session_destroy();
}

header('Location: index.php');
