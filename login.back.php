<?php

    require './components/connection.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM `user` WHERE username = '$username'";
        $response = mysqli_query($connection, $sql);

        if ($response) {
            if (mysqli_num_rows($response) === 0) {
                echo 'Invalid Username';
                exit();
            }

            if (mysqli_num_rows($response) === 1) {
               $row = mysqli_fetch_assoc($response);
               $hash_password = $row['password'];
               $user_id = $row['id'];
            }

            if (password_verify($password, $hash_password)) {
               session_start();
               $_SESSION['user'] = $username;
               $_SESSION['user_id'] = $user_id; 
               $_SESSION['isLoggedin'] = true;
               header('location: index.php');
            } else{
                echo 'Invalid Password';
            }
        }
    }

?>