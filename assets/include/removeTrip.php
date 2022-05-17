<?php

require_once('config.php');
if($_SESSION['user']['role'] != 1) {
    header('location: ../../login.php');
}

if(isset($_GET["id"])) {
    // krijg booking_ids
    $reservations = $database->select('Reservations', 'booking_id', ['location_id' => $_GET["id"]]);

    // Verwijder reservaties
    $database->delete('Reservations', ['location_id' => $_GET["id"]]);

    // Verwijder bookingen
    foreach($reservations as $reservation) {
        echo $reservation;
        $booking = $database->delete("Bookings", ['id' => $reservation]);
    }

    // Verwijder locatie
    $location = $database->delete("Locations", ['id' => $_GET["id"]]);

    if($location->rowCount() > 0) {
        header('location: ../../admin/index.php?success=Reis is successvol verwijderd');
    }
    else {
        header('location: ../../admin/index.php?error=Reis kon niet verwijderd worden');
    }
} else {
    header('location: ../../admin/index.php?error=Reis kon niet gevonden worden');
}



?>