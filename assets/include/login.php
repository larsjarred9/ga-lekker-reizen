<?php

require_once('config.php');


$user = $database->get('Users', ['id', 'first_name', 'last_name', 'email', 'password', 'role'], ['email' => $_POST['email']]);

if (password_verify($_POST['password'], $user['password'])) {
    $_SESSION['user'] = $user;

    include('index.php');

}
else {
    header('location: ../../login.php?error=Wachtwoord Onjuist');
}