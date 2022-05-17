<?php require_once('assets/include/config.php');?>
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

    <section class="container" id="reizen">
        <h2>Reizen</h2>
        <?php if($_SESSION['user']):?>
        <p>Klik op een een reis voor meer informatie over de reis en om je uit en in te schrijven voor een reis.</p>
        <?php else:?>
        <p>Inschrijven voor een reis? Je moet eerst <a href="login.php" class="text-decoration-none text-primary">inloggen</a> voordat je kunt inschrijven op een reis.</p>
        <?php endif;?>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
            <?php
            $locations = $database->select('Locations', ['id','title','location','description','begin_date','end_date','capacity']);

            foreach($locations as $location):?>
                <div class="col">
                    <a href="<?php if($_SESSION['user']) {echo 'student/trip.php?id='.$location['id'];} else {echo 'login.php';}?>" class="text-decoration-none">
                        <div class="card" style="background-image: url('assets/images/uploads/<?= $location['id'] ?>.jpg')">
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
                    </a>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </section>

    <section class="bg-light">
        <div class="swiper swiper-container swiper-card-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1552832230-c0197dd311b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1996&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1558370781-d6196949e317?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2079&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1599946347371-68eb71b16afc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1547448415-e9f5b28e570d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1583477716463-9c485c89f6e1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container col-xl-10 col-xxl-8" id="verhaal">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-lg-7 text-center text-lg-start">
                <h2 class="">Ons Verhaal</h2>
                <p class="col-lg-10">Ga Lekker Reizen is onderdeel van Grafisch Lyceum Rotterdam. Onze enthousiaste medewerkers zoeken dagelijks naar de leukste en goedkoopste vakanties van diverse touroperators. Alle reizen boek je direct met studentenkorting!</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <img src="assets/images/airplane.jpg" class="img-fluid">
            </div>
        </div>
    </section>

    <section>
        <img src="assets/images/forrest.jpg" alt="" class="img-fluid w-100">
    </section>

    <?php include('assets/include/contact.php')?>

    <?php include('assets/include/footer.php')?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
</body>
</html>