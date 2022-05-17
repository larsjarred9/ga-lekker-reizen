<?php
require_once('config.php');


if(isset($_GET["id"])) {

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