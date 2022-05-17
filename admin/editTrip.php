<?php require_once('../assets/include/config.php');
if($_SESSION['user']['role'] != 1) {
    header('location: ../login.php');
}

?>
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

<header></header>

<section class="container">
    <?php
    if(!$_GET['id']) {
        header('location: index.php?error=Reis kon niet gevonden worden');
    }
    if($_GET['error']) {
        echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';
    }

    $location = $database->get('Locations', ["title", "location", "type", "begin_date", "end_date", "capacity", "description",],["id" => $_GET['id']]);
    ?>
    <a href="index.php" class="btn btn-primary float-end"><i class="fa-solid fa-arrow-left-long"></i> Terug naar overzicht</a>
    <h2>Reis Bijwerken</h2>
    <p>Pas de onderstaande gegevens aan om wijzigingen aan te brengen.</p>
    <form action="/assets/include/editTrip.php" method="post" enctype="multipart/form-data">
        <label>Title</label>
        <input type="hidden" name="id" value="<?= $_GET['id']?>"
        <input required name="title" value="<?= $location['title']?>" maxlength="32" type="text" class="form-control">

        <label class="mt-3">Locatie</label>
        <input required name="location" value="<?= $location['location']?>" maxlength="32" type="text" class="form-control">

        <label class="mt-3">Type</label>
        <input required name="type" value="<?= $location['type']?>" type="text" maxlength="32" class="form-control">

        <label class="mt-3">Begin Datum</label>
        <input required name="begin_date" value="<?= $location['begin_date']?>" type="date" class="form-control">

        <label class="mt-3">Eind Datum</label>
        <input required name="end_date" value="<?= $location['end_date']?>" type="date" class="form-control">

        <label class="mt-3">Capaciteit</label>
        <input required name="capacity" value="<?= $location['capacity']?>" type="number" maxlength="1000" min="1" value="1" class="form-control">

        <label class="mt-3">Omschrijving</label>
        <textarea required name="description" class="form-control"><?= $location['description']?></textarea>

        <label class="mt-3">Afbeelding</label>
        <input name="image" type="file" class="form-control">
        <p><small>Afbeelding word overschreven indien er een afbeelding word geupload.</small></p>

        <button type="submit" name="submit" class="btn btn-primary mt-3">Aanpassen</button>

    </form>
    </div>
</section>

<?php include('../assets/include/footer.php')?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.0/datatables.min.js"></script>
<script src="../assets/js/datatables.js"></script>
</body>
</html>