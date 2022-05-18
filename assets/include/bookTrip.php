<?php
require_once('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Check of sessie gezet is
if(!$_SESSION['user']) {
    header('location: ../../login.php');
}
// Check of gebruiker een user is
if($_SESSION['user']['role'] != 0) {
    header('location: ../../login.php');
}

// Check of count niet overschreven word
$location = $database->get('Locations', 'capacity', ['id' => $_POST['id']]);

$count = $database->count('Reservations', ['location_id' => $_POST['id']]);

if($count >= $location) {
    header('location: ../../student/trip.php?id='.$_POST['id'].'&error=Maximaal aantal inschrijven is al behaald');
    return false;
}

// Check of persoon al is aangemeld
$aangemeld = $database->has('Reservations', ['location_id' => $_POST['id'], 'user_id' => $_SESSION['user']['id']]);

if($aangemeld) {
    header('location: ../../student/trip.php?id='.$_POST['id'].'&error=Je bent al inschreven voor deze reis');
    return false;
}

// Maak booking
$booking = $database->insert("Bookings", [
    "student_number" => $_POST['student_number'],
    "id_number" => $_POST['bsn'],
    "remark" => $_POST['remark'],
]);

// Krijg net aangemaakt id
$id = $database->id();

if($booking->rowCount() < 1) {
    header('location: ../../student/trip.php?id='.$_POST['id'].'&error=Boeking kon niet worden aangemaakt');
}


// Maak registratie
$registration = $database->insert("Reservations", [
    "user_id" => $_SESSION['user']['id'],
    "booking_id" => $id,
    "location_id" => $_POST['id'],
]);

if($booking->rowCount() < 1) {
    header('location: ../../student/trip.php?id='.$_POST['id'].'&error=Inschrijving kon niet worden aangemaakt');
}

$loc = $database->get('Locations', ['location','begin_date','end_date'], ['id' => $_POST['id']]);

$mail = new PHPMailer();

// E-Mail instellingen
$mail->isSMTP();
$mail->Host = 'mail.speetjens.net';
$mail->SMTPAuth = true;
$mail->Username = 'glr@speetjens.net';
$mail->Password = 'khQL3fI4';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

// Informatie
$mail->setFrom('glr@speetjens.net', 'GLR');
$mail->addAddress($_SESSION['user']['email']);

// Content
$mail->isHTML(true);
$mail->Subject = 'GLR | Inschrijving ontvangen';
$mail->Body = 'Beste '.$_SESSION['user']['first_name'].',<br><br>We hebben je inscrijving ontvangen voor onze reis naar <b>'.$loc["location"].'</b> op '.$loc["begin_date"].' tot '.$loc["end_date"].'.<br><br><br>Binnenkort ontvang je van ons een factuur en meer informatie. Vergeet niet je glimlach en je paspoort zo ga je Lekkerder op reis!';

$mail->send();

// Terug naar reis
header('location: ../../student/trip.php?id='.$_POST['id'].'&success=We hebben je inschrijving ontvangen. Je zult over enkele ongeblikken een e-mail ontvangen ter bevestiging');




?>