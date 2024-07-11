<?php

    session_start();
    if (!(isset($_SESSION['user']) && $_SESSION['isLoggedin'] === true)) {
        header('location: login.php');
    }

?>