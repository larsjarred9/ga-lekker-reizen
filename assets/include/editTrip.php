<?php
require_once('config.php');

if(isset($_FILES["image"])) {
    $target_dir = "../images/uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    unlink($target_file);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Alleen JPG & JPEG
    if ($imageFileType != "jpg" && $imageFileType != "jpeg") {
        header('location: ../../admin/editTrip.php?id='.$_POST['id'].'&error=Alleen JPG en JPEG afbeeldingen mogen worden geupload');
        return false;
    } else {

        // Target maken
        $new_target = $target_dir . $_POST['id'] . '.jpg';

        // Bestand uploaden
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $new_target)) {
            echo "yes";
        } else {
            header('location: ../../admin/editTrip.php?id='.$_POST['id'].'&error=Er iets verkeerd gegaan met het opslaan van de afbeelding');
            return false;
        }
    }
}

$database->update("Locations", [
    "title" => $_POST['title'],
    "location" => $_POST['location'],
    "type" => $_POST['type'],
    "begin_date" => $_POST['begin_date'],
    "end_date" => $_POST['end_date'],
    "capacity" => $_POST['capacity'],
    "description" => $_POST['description'],
], ["id" => $_POST['id']]);

header('location: ../../admin/index.php?success=Reis is successvol aangepast');



?>