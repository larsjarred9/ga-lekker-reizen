
<?php
require_once('assets/include/config.php');
if($_SESSION['user']) {
    include('assets/include/index.php');
}
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GLR | Ga Lekker Reizen</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include('assets/include/navbar.php')?>

<header></header>

<section class="container">
    <h1>Inloggen</h1>
    <p>Welkom! Voer u gegevens in om verder te gaan.</p>
    <?php
    if($_GET['error']) {
        echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';
    }
    ?>
    <form action="/assets/include/login.php" method="post">
        <label>E-Mail</label>
        <input placeholder="studentnumr@glr.nl" required name="email" type="email" class="form-control">

        <label class="mt-3">Wachtwoord</label>
        <input required name="password" type="password" class="form-control">
        <button type="submit" name="submit" class="btn btn-primary mt-3">Aanmelden</button>
    </form>
</section>

<section>
    <img src="assets/images/forrest.jpg" alt="" class="img-fluid w-100">
</section>

<?php include('assets/include/contact.php')?>

<?php include('assets/include/footer.php')?>


<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/swiper/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>
</body>
</html>