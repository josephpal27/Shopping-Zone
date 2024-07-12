<?php

    require "./components/connection.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        echo $username;
        echo $email;
        echo $phone;
        echo $address;
    }

?>