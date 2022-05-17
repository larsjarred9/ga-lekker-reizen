
<?php
session_start();

// Verwijder session variabelen
session_unset();

// Verwijder sessie
session_destroy();

header('location: /');

?>