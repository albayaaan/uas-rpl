<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Unknown</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php
    include "connect.php";
    session_start();

    if (isset($_SESSION["user"])) {
        header("Location: app.php?page=home");
    }
    ?>

    <header id="header" class="fixed-top d-flex align-items-center position-sticky">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Manusia Pintar</a></h1>
            </div>

        </div>
    </header><!-- End Header -->

    <div style="max-height: 75vh; min-height: 75vh">
        <main id="main">

            <!-- ======= Counts Section ======= -->

            <section class="login">
                <div class="container">

                    <div class="row">
                        <div class="image col-lg-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                            <img src="assets/img/login.png" alt="" class="img-fluid">
                        </div>

                        <div class="offset-1 col-lg-6 col-md-12 align-self-center" data-aos="fade-up" data-aos-delay="300">
                            <!-- alert -->
                            <?php
                            if (isset($_SESSION["message"])) {
                                if (isset($_SESSION["success"])) {
                            ?>
                                    <div class="container-fluid alert alert-primary mt-2" role="alert">
                                        <?= $_SESSION["message"]; ?>
                                    </div>
                                <?php
                                    unset($_SESSION["success"]);
                                } else {
                                ?>
                                    <div class="container-fluid alert alert-danger mt-2" role="alert">
                                        <?= $_SESSION["message"]; ?>
                                    </div>
                            <?php
                                }
                            }
                            unset($_SESSION["message"]);
                            ?>
                            <!-- end alert -->
                            <h1 class="text-center">Masuk</h1>
                            <form action="login.php" method="post">
                                <div class="form-group mt-3">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="password" class="form-control" name="password" id="subject" placeholder="Password" minlength="8" required>
                                </div>
                                <div class="text-center mt-3"><button type="submit" class="btn btn-primary">Masuk</button></div>
                                <div class="mt-3 text-center">
                                    <p>Belum punya akun? <a href="page_register.php">Daftar</a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section><!-- End Counts Section -->

        </main><!-- End #main -->
    </div>

    <?php
    include('footer.php');
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>