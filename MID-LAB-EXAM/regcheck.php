<?php

session_start();

if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $password = ($_POST['password']);
    $type = ($_POST['type']);


    if (empty($userName) || empty($password)) {
        echo "Null value!";
    } else {
        setcookie('userName', $userName, time() + 3600, '/');
        setcookie('password', $password, time() + 3600, '/');
        setcookie('type', $type, time() + 3600, '/');


        if ($type == 'user') {
            $file = fopen('user.txt', 'a');
            $user = $userName . "|" . $password . "|" . $type . "\n";
            fwrite($file, $user);
            fclose($file);
        } else {
            $file = fopen('admin.txt', 'a');
            $admin = $userName . "|" . $password . "|" . $type . "\n";
            fwrite($file, $admin);
            fclose($file);
        }
        echo "Registration Completed!";
    }
} else {
    echo "Something went wrong";
}
