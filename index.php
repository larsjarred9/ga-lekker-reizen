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

    <section class="container">
        <h2>Reizen</h2>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
            <?php
            require_once('assets/include/config.php');
            $locations = $database->select('Locations', ['title','location','description','capacity']);

//            foreach($locations as $location):
//                var_dump($location);
//            endforeach;
            ?>
            <div class="col">
                <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    <div class="card-body">
                        <p>Test</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    <div class="card-body">
                        <p>Test</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    <div class="card-body d-flex align-self-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex align-self-end">
                                <p class="bg-light p-2 text-center fs-5">20 December<br>2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-3">Spanje</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor tempor urna. Vivamus eget odio ut lectus auctor rhoncus quis nec tellus. Nunc est lacus, fringilla et risus in</p>
            </div>
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
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-image: url('https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80')">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container col-xl-10 col-xxl-8">
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
                <img src="images/airplane.jpg" class="img-fluid">
            </div>
        </div>
    </section>

    <?php include('assets/include/footer.php')?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
</body>
</html>