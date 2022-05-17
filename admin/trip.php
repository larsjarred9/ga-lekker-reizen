<?php require_once('../assets/include/config.php');
if($_SESSION['user']['role'] != 1) {
    header('location: login.php');
}?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GLR | Ga Lekker Reizen</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.0/datatables.min.css"/>
</head>
<body>

<?php include('../assets/include/navbar.php')?>

<header>
    <div class="container">
        <!-- Plaats hier nog content -->
    </div>
</header>

<section class="container">
    <?php
    if(!$_GET['id']) {
        header('location: index.php?error=Reis kon niet gevonden worden');
    }


    $reservations = $database->select('Reservations', ["[>]Bookings" => ["booking_id" => "id"], "[>]Users" => ["user_id" => "id"]], ['Bookings.student_number', 'Users.first_name', 'Users.last_name', 'Bookings.id_number', 'Bookings.remark'], ['location_id' => $_GET['id']]);

    $location = $database->get('Locations', ["id", "title", "location", "type", "begin_date", "end_date", "capacity", "description",],["id" => $_GET['id']]); ?>
    <h2><?= $location['title'] ?></h2>
    <p><?= $location['description'] ?></p>
    <br>
    <div class="d-flex justify-content-between">
        <p><b>Reis ID:</b> <?= $location['id'] ?></p>
        <p><b>Locatie:</b> <?= $location['location'] ?></p>
        <p><b>Type:</b> <?= $location['type'] ?></p>
        <p><b>Begin Datum:</b> <?= $location['begin_date'] ?></p>
        <p><b>Eind Datum:</b> <?= $location['end_date'] ?></p>
        <p><b>Inschrijvingen:</b> <?= $count = $database->count('Reservations', ['location_id' => $_GET['id']]) ?> / <?= $location['capacity'] ?></p>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <h2>Inschrijvingen</h2>
        <p>Alle inschrijvingen in een algemeen overzicht</p>
        <table class="table table-secondary table-striped data-table">
            <thead>
            <tr>
                <th scope="col">Student</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">BSN</th>
                <th scope="col">Additioneel</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($reservations as $reservation): ?>
                <td><?= $reservation['student_number'] ?></td>
                <td><?= $reservation['first_name'] ?></td>
                <td><?= $reservation['last_name'] ?></td>
                <td><?= $reservation['id_number'] ?></td>
                <td><?= $reservation['remark'] ?></td>

            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</section>

<div>
    <img src="../assets/images/uploads/<?= $location['id']?>.jpg" alt="" class="img-fluid w-100">
</div>

<?php include('../assets/include/footer.php')?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.0/datatables.min.js"></script>
<script src="../assets/js/datatables.js"></script>
</body>
</html>