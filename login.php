
<?php
session_start();
if($_SESSION['user']) {
    include('assets/include/index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GLR | Ga Lekker Reizen</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include('assets/include/navbar.php')?>

<header>
    <div class="container">
        <!-- Plaats hier nog content -->
    </div>
</header>

<section class="container">
    <h1>Inloggen</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus nulla sit amet leo cursus maximus. Sed porttitor arcu et orci iaculis sagittis. Mauris gravida consequat erat, non dictum nisl elementum non.</p>
    <?php
    if($_GET['error']) {
        echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';
    }
    ?>
    <form action="/assets/include/login.php" method="post">
        <label>E-Mail</label>
        <input required name="email" type="email" class="form-control">

        <label class="mt-3">Wachtwoord</label>
        <input required name="password" type="password" class="form-control">
        <button type="submit" name="submit" class="btn btn-primary mt-3">Aanmelden</button>
    </form>
</section>

<section>
    <img src="assets/images/forrest.jpg" alt="" class="img-fluid w-100">
</section>

<section class="container col-xl-10 col-xxl-8">
    <div class="row align-items-center">
        <div class="col-lg-7 text-center text-lg-start">
            <h2 class="">Contact</h2>
            <p class="col-lg-10">Ga Lekker Reizen is onderdeel van Grafisch Lyceum Rotterdam. Onze enthousiaste medewerkers zoeken dagelijks naar de leukste en goedkoopste vakanties van diverse touroperators. Alle reizen boek je direct met studentenkorting!</p>
            <a href="mailto:84644@glr.nl" target="_blank" class="btn btn-primary"><i class="fa-solid fa-envelope"></i> E-Mail</a>
            <a href="tel:0637449583" target="_blank" class="btn btn-primary"><i class="fa-solid fa-mobile"></i> Bellen</a>
            <a href="https://wa.me/0637449583" target="_blank" class="btn btn-primary"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <img src="assets/images/airplane.jpg" class="img-fluid">
        </div>
    </div>
</section>

<footer class="bg-primary">
    <div class="container-fluid text-white">
        <div class="d-flex justify-content-between pt-3 pb-3">
            <img src="https://opleiding.com/u/opleider/grafisch-lyceum-rotterdam.png" height="100px">
            <p class="align-self-center mt-3">© Ga Lekker Reizen - <?= date("Y"); ?>, Rechten voortbehouden</p>
        </div>
    </div>
</footer>


<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/swiper/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>
</body>
</html>