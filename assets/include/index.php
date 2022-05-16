<?php

// Selecteer op basis van role welke rol de user heeft
var_dump($_SESSION['user']);
if($_SESSION['user']['role'] == 1) {
    header('location: ../../admin/index.php');
}
else {
    header('location: ../../student/index.php');
}

?>