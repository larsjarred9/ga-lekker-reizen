<?php
require_once('config.php');
if($_SESSION['user']['role'] != 0) {
    header('location: ../../login.php');
}

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


if(isset($_GET["id"])) {

    $reservation = $database->get('Reservations', "*", ['user_id' => $_SESSION['user']['id'], 'location_id' => $_GET['id']]);
    $location = $database->delete("Bookings", ['id' => $reservation['booking_id']]);

    if($location->rowCount() > 0) {
        $reserv = $database->delete("Reservations", ['id' => $reservation['id']]);
        if($reserv->rowCount() > 0) {
            header('location: ../../student/trip.php?id=' . $_GET["id"] . '&success=We hebben je succesvol afgemeld voor deze reis');
        }
        else {
            header('location: ../../student/trip.php?id='.$_GET["id"].'&error=Inschrijving kon niet ingetrokken worden');
        }
    }
    else {
        header('location: ../../student/trip.php?id='.$_GET["id"].'&error=Inschrijving kon niet ingetrokken worden');
    }

} else {
    header('location: ../../index.php?error=Reis kon niet worden gevonden');
}



?>