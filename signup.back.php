<?php

    require './components/connection.php';
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $confirm_password = $_POST['c_pass'];

        if ($password  != $confirm_password) {
            header('location: ./error_alerts/signup_error_2.php');
            exit();
        } else{
            $sql = "SELECT * FROM `user` WHERE `username` = '$username'";
            $response = mysqli_query($connection, $sql);

            if (mysqli_num_rows($response) > 0) {
                header('location: ./error_alerts/signup_error.php');
                exit();
            } else{
                $hash_pass = password_hash($password, PASSWORD_DEFAULT);

                $insert_sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$hash_pass')";
                $response_2 = mysqli_query($connection, $insert_sql);

                if ($response_2) {
                    $user_id = mysqli_insert_id($connection);
        
                    session_start();
                    $_SESSION['user'] = $username;
                    $_SESSION['isLoggedin'] = true;
                    $_SESSION['user_id'] = $user_id;
                    header('location: index.php');
                } 
            }
        }
    }

?>