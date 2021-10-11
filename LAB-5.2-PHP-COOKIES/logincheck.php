<?php
session_start();

if (isset($_POST['submit'])) {
    $username = '';
    $password = '';
    if (isset($_POST['username'])) {
        $id = $_POST['username'];
    }
    // $username = (isset($_POST['username']) ? $_POST['username'] : '');
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    //$password = (isset($_POST['password']) ? $_POST['password'] : '');
    if (isset($_POST['password'])) {
        $id = $_POST['password'];
    }

    if ($username != "") {
        if ($password != "") {
            if ($_COOKIE['username'] == $username && $_COOKIE['password'] == $password) {
                //$_SESSION['flag'] = "true";
                setcookie('flag', 'true', time() + 3600, '/');
                header('location: home.php');
            } else {
                echo "invalid username/password";
            }
        } else {
            echo "Invalid password...";
        }
    } else {
        echo "Invalid username...";
    }
}
