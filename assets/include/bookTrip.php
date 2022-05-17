<?php
require_once('config.php');
if($_SESSION['user']['role'] != 0) {
    header('location: ../../login.php');
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

// Terug naar reis
header('location: ../../student/trip.php?id='.$_POST['id'].'&success=We hebben je inschrijving ontvangen. Je zult over enkele ongeblikken een e-mail ontvangen ter bevestiging');




?>