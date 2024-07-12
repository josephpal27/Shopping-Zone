<?php

    require './components/userAuth.php';

    session_unset();
    session_destroy();

    header('location: login.php');

?>