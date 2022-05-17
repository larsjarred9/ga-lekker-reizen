<?php
require_once('config.php');
if($_SESSION['user']['role'] != 1) {
    header('location: ../../login.php');
}

// Check of afbeelding meegeupload is
if(isset($_FILES["image"])) {

    $target_dir = "../images/uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Alleen JPG & JPEG
    if ($imageFileType != "jpg" && $imageFileType != "jpeg") {
        header('location: ../../admin/createTrip.php?error=Alleen JPG en JPEG afbeeldingen mogen worden geupload');
        return false;
    } else {
        // Toevoegen aan database
        $database->insert("Locations", [
            "title" => $_POST['title'],
            "location" => $_POST['location'],
            "type" => $_POST['type'],
            "begin_date" => $_POST['begin_date'],
            "end_date" => $_POST['end_date'],
            "capacity" => $_POST['capacity'],
            "description" => $_POST['description'],
        ]);

        // Target maken
        $new_target = $target_dir . $database->id().'.jpg';

        // Bestand uploaden
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $new_target)) {
            header('location: ../../admin/index.php?success=Reis is successvol toegevoegd');
        } else {
            header('location: ../../admin/createTrip.php?error=Er iets verkeerd gegaan met het opslaan van de afbeelding');
            return false;
        }
    }
} else {
    header('location: ../../admin/createTrip.php?error=Er iets verkeerd gegaan met het opslaan van de afbeelding');
    return false;
}



?>