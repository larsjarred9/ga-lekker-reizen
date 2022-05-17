<?php require_once('../assets/include/config.php');
if($_SESSION['user']['role'] != 0) {
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


    if ($_GET['success']) {
        echo '<div class="alert alert-success role="alert">' . $_GET['success'] . '</div>';
    }

    if ($_GET['error']) {
        echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
    }


    $location = $database->get('Locations', ["id", "title", "location", "type", "begin_date", "end_date", "capacity", "description",],["id" => $_GET['id']]); ?>
    <h2><?= $location['title'] ?></h2>
    <p><?= $location['description'] ?></p>
    <br>
    <div class="d-flex justify-content-between">
        <p><b>Locatie:</b> <?= $location['location'] ?></p>
        <p><b>Type:</b> <?= $location['type'] ?></p>
        <p><b>Begin Datum:</b> <?= $location['begin_date'] ?></p>
        <p><b>Eind Datum:</b> <?= $location['end_date'] ?></p>
        <p><b>Inschrijvingen:</b> X / <?= $location['capacity'] ?></p>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <h2>Aanmelden</h2>
        <?php
        // Check of persoon al is aangemeld
        $aangemeld = $database->has('Reservations', ['location_id' => $_GET['id'], 'user_id' => $_SESSION['user']['id']]);

        if(!$aangemeld):?>
        <p>Vul u gegevens in. Na verzending worden u gegevens gecontrolleerd en ontvangt u een bevestiging in u e-mail inbox.</p>
        <form action="/assets/include/bookTrip.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $_GET['id']?>"
            <label>Voornaam</label>
            <input value="<?= $_SESSION['user']['first_name'] ?>" readonly class="form-control">

            <label class="mt-3">Achternaam</label>
            <input value="<?= $_SESSION['user']['last_name'] ?>" readonly class="form-control">

            <label class="mt-3">Student Nummer</label>
            <input required name="student_number" maxlength="6" type="number" class="form-control">

            <label class="mt-3">BSN Nummer</label>
            <input required name="bsn" maxlength="9" type="number" class="form-control">


            <label class="mt-3">Additionele Informatie</label>
            <textarea required name="remark" class="form-control"></textarea>
            <p><small>Vul hier gegevens in over bijvoorbeeld alergenen of lichamelijke klachten.</small></p>


            <button type="submit" name="submit" class="btn btn-primary mt-3">Inschrijven</button>

        </form>
        <?php else:?>
            <p>Je bent al aangemeld voor deze reis. Indien u zich wil afmelden kan dit gemakkelijk via de onderstaande knop doen. Indien u al een betaling heeft verricht moet u contact met ons opnemen.</p>
            <a href="../assets/include/cancelTrip.php?id=<?= $_GET['id']?>" class="btn btn-primary"><i class="fa-solid fa-power-off"></i> Afmelden</a>
        <?php endif;?>
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