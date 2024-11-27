<?php

// check for the request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return header('Location: ../login-register.php?errorRegister=Invalid request');
}

include_once __DIR__ . '/../classes/Connection.php';
include_once __DIR__ . '/../classes/User.php';

session_start();

$_SESSION['oldRegister'] = $_POST;

// check for the email
if ($_POST['email'] == '' || $_POST['name'] == '' || $_POST['surname'] == '' || $_POST['password'] == '') {
    return header('Location: ../login-register.php?errorRegister=Please fill all the fields');
}

$credentials = $_POST;
$credentials['password'] = password_hash($credentials['password'], PASSWORD_DEFAULT);

$user = new User();
$existingUser = $user->getUserByEmail($credentials['email']);

// check if email is taken
if ($existingUser) {
    return header('Location: ../login-register.php?errorRegister=Email already exists');
}

// setting user in DB 
$user->setUser($credentials);

$newUser = $user->getUserId($credentials['email']);

// setting user in session
$_SESSION['userId'] = $newUser['id'];

return header('Location: ../index.php');
