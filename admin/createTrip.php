<?php require_once('../assets/include/config.php');?>
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
    if($_GET['error']) {
        echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';
    }
    ?>
    <a href="index.php" class="btn btn-primary float-end"><i class="fa-solid fa-arrow-left-long"></i> Terug naar overzicht</a>
    <h2>Reis Toevoegen</h2>
    <p>Vul de onderstaande gegevens in om een reis toe te voegen.</p>
    <form action="/assets/include/createTrip.php" method="post" enctype="multipart/form-data">
        <label>Title</label>
        <input required name="title" maxlength="32" type="text" class="form-control">

        <label class="mt-3">Locatie</label>
        <input required name="location" maxlength="32" type="text" class="form-control">

        <label class="mt-3">Type</label>
        <input required name="type" type="text" maxlength="32" class="form-control">

        <label class="mt-3">Begin Datum</label>
        <input required name="begin_date" type="date" class="form-control">

        <label class="mt-3">Eind Datum</label>
        <input required name="end_date" type="date" class="form-control">

        <label class="mt-3">Capaciteit</label>
        <input required name="capacity" type="number" maxlength="1000" min="1" value="1" class="form-control">

        <label class="mt-3">Omschrijving</label>
        <textarea required name="description" class="form-control"></textarea>

        <label class="mt-3">Afbeelding</label>
        <input required name="image" type="file" class="form-control">

        <button type="submit" name="submit" class="btn btn-primary mt-3">Toevoegen</button>

    </form>
    </div>
</section>

<?php include('../assets/include/footer.php')?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.0/datatables.min.js"></script>
<script src="../assets/js/datatables.js"></script>
</body>
</html>