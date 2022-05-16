<?php session_start() ?>
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
    <a href="" class="btn btn-primary float-end">Reis toevoegen</a>
    <h2>Reizen</h2>
    <p>Beheer & bekijk hier gemakkelijk de aangemaakte reizen. Klik op een reis voor meer details om inschrijvingen te zien en om wijzigingen aan te brengen.</p>
    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
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

<section>
    <img src="../assets/images/forrest.jpg" alt="" class="img-fluid w-100">
</section>

<section class="container">
    <h2>Inschrijvingen</h2>
    <p>Alle inschrijvingen in een algemeen overzicht</p>
    <table class="table table-light table-striped data-table">
        <thead>
        <tr>
            <th scope="col">Nummer</th>
            <th scope="col">Voornaam</th>
            <th scope="col">Achternaam</th>
            <th scope="col">Reis</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>@fat</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
</section>

<?php include('../assets/include/footer.php')?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.0/datatables.min.js"></script>
<script src="../assets/js/datatables.js"></script>
</body>
</html>