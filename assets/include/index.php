<?php

// Selecteer op basis van role welke rol de user heeft
if($_SESSION['user']['role'] == 1) {
    header('location: ../../admin/index.php');
}
else {
    header('location: ../../index.php');
}

?>