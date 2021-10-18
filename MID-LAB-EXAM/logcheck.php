<?php

session_start();

if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if (empty($userName) || empty($password)) {
        echo "Username/Password is needed";
    } else {
    }
}
