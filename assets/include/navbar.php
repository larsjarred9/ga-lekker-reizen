<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/images/logo_dark.png" height="75px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Navigatie Aanpassen">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link">Reizen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Verhaal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="d-flex">
                <?php // Laat op basis van sessie specifieke knoppen zien
                if($_SESSION['user']):?>
                    <a href="./login.php" class="btn btn-primary me-2"><i class="fa-solid fa-gauge-high"></i> Dashboard</a>
                    <a href="./logout.php" class="btn btn-secondary"><i class="fa-solid fa-right-from-bracket"></i></a>
                <?php else:?>
                    <a href="./login.php" class="btn btn-primary"><i class="fa-solid fa-user"></i> Aanmelden</a>
                <?php endif;?>
            </form>
        </div>
    </div>
</nav>