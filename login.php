
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

<?php include('assets/include/contact.php')?>

<?php include('assets/include/footer.php')?>


<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/swiper/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>
</body>
</html>