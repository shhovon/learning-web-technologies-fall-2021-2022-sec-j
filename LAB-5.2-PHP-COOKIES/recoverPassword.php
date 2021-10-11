<?php

session_start();

if (isset($_POST['submit'])) {
    $fEmail = $_POST['email'];

    if ($fEmail === $_COOKIE["email"]) {
        echo "We have sent an OTP in your email";
    }
} else {
    echo "Error occured";
}
