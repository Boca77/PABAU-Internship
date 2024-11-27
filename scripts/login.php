<?php

// check for the request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return header('Location: login-register.php?errorLogin=Invalid request');
}

include_once __DIR__ . '/../classes/Connection.php';
include_once __DIR__ . "/../classes/User.php";

session_start();

$_SESSION['oldLogin'] = $_POST;

// check for the email
if ($_POST['email'] == '') {
    return header('Location: ../login-register.php?errorLogin=Please enter email');
}

// check for the password
if ($_POST['password'] == '') {
    return header('Location: ../login-register.php?errorLogin=Please enter password');
}

$user = new User();
$credentials = $user->getUserByEmail($_POST['email']);

// check for the email validity
if (!$credentials) {
    return header('Location: ../login-register.php?errorLogin=Invalid email');
}

// check for the password validity
if (!password_verify($_POST['password'], $credentials['password'])) {
    return header('Location: ../login-register.php?errorLogin=Invalid password');
}

// setting user in session
$_SESSION['userId'] = $credentials['id'];

return header('Location: ../index.php');
