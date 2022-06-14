<header id="header" class="fixed-top d-flex align-items-center position-sticky">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="app.php?page=home">Manusia Pintar</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><strong>Hai <?= $_SESSION['name'] ?>!</strong></li>
                <li><a class="getstarted scrollto" href="logout.php">Keluar</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->