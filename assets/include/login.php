<?php

require_once('config.php');


$user = $database->get('Users', ['id', 'first_name', 'last_name', 'password', 'role'], ['email' => $_POST['email']]);

if (password_verify($_POST['password'], $user['password'])) {
    session_start();
    $_SESSION['user'] = $user;

    // Selecteer op basis van role welke rol de user heeft
    if($user['role'] == 1) {
        header('location: ../../admin/index.php');
    }
    else {
        header('location: ../../student/index.php');
    }
}
else {
    header('location: ../../login.php?error=Wachtwoord Onjuist');
}