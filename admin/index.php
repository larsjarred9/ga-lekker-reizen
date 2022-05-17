<?php require_once('../assets/include/config.php');
if($_SESSION['user']['role'] != 1) {
    header('location: ../login.php');
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
    if($_GET['success']) {
        echo '<div class="alert alert-success role="alert">'.$_GET['success'].'</div>';
    }

    if ($_GET['error']) {
        echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
    }
    ?>
    <a href="createTrip.php" class="btn btn-primary float-end">Reis toevoegen</a>
    <h2>Reizen</h2>
    <p>Beheer & bekijk hier gemakkelijk de aangemaakte reizen. Klik op een reis voor meer details om inschrijvingen te zien en om wijzigingen aan te brengen.</p>
    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
        <?php
        $locations = $database->select('Locations', ['id','title','location','description','begin_date','end_date','capacity']);

        foreach($locations as $location):?>
            <div class="col">
                <a href="trip.php?id=<?= $location['id']; ?>" class="text-decoration-none">
                <div class="card" style="background-image: url('../assets/images/uploads/<?= $location['id'] ?>.jpg')">
                    <div class="card-body d-flex align-self-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex align-self-end">
                                <p class="bg-light p-2 text-center fs-5"><?= date('d M Y',strtotime($location['begin_date'])) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-3"><?= $location['title']?></h3>
                <p><?= $location['location']?></p>
                <p><?= $location['description']?></p>
                <p><small><i><?php $count = $database->count('Reservations', ['location_id' => $location['id']]); $count = ($location['capacity']-$count); if($count > 0) { echo $count.' Plek(ken) beschikbaar';} else {echo "<span class='text-danger'>VOL | Geen plekken beschikbaar</span>";}?></i></small></p>
                <a href="editTrip.php?id=<?= $location['id']  ?>" class="btn btn-light">Bijwerken</a>
                <a href="../assets/include/removeTrip.php?id=<?= $location['id']  ?>" onclick="return confirm('Weet je zeker dat je deze reis wilt verwijderen?')" class="btn btn-danger">Verwijderen</a>
                </a>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</section>

<section>
    <img src="../assets/images/forrest.jpg" alt="" class="img-fluid w-100">
</section>

<section class="container">
    <?php $reservations = $database->select('Reservations', ["[>]Bookings" => ["booking_id" => "id"], "[>]Locations" => ["location_id" => "id"], "[>]Users" => ["user_id" => "id"]], ['Bookings.student_number', 'Users.first_name', 'Users.last_name', 'Locations.location', 'Locations.id', 'Locations.begin_date',  'Bookings.id_number', 'Bookings.remark']); ?>
    <h2>Inschrijvingen</h2>
    <p>Alle inschrijvingen in een algemeen overzicht.</p>
    <table class="table table-light table-striped data-table">
        <thead>
        <tr>
            <th scope="col">Student</th>
            <th scope="col">Voornaam</th>
            <th scope="col">Achternaam</th>
            <th scope="col">Reis</th>
            <th scope="col">Datum</th>
            <th scope="col">BSN</th>
            <th scope="col">Additioneel</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($reservations as $reservation): ?>
            <td><?= $reservation['student_number'] ?></td>
            <td><?= $reservation['first_name'] ?></td>
            <td><?= $reservation['last_name'] ?></td>
            <td><a href="trip.php?id=<?= $reservation['id'] ?>"><?= $reservation['location'] ?></a></td>
            <td><?= $reservation['begin_date'] ?></td>
            <td><?= $reservation['id_number'] ?></td>
            <td><?= $reservation['remark'] ?></td>

        <?php endforeach;?>
        </tbody>
    </table>
</section>

<?php include('../assets/include/footer.php')?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.0/datatables.min.js"></script>
<script src="../assets/js/datatables.js"></script>
</body>
</html>