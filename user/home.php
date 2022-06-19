<?php
include('hero.php');
?>
<main id="main">
    <!-- ======= About Webinar Section ======= -->
    <section id="webinar" class="about section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Webinar</h2>
            </div>

            <div class="content text-center" data-aos="fade-up" data-aos-delay="150">
                <p>
                    Direkomendasikan untuk kamu yang:
                </p>
                <ul class="justify-content-center">
                    <li>Stress mengatasi masalah karena kesehatan mental, pekerjaan, dan finansial.</li>
                    <li>Mengalami Quarter Life-Crisis.</li>
                    <li>Kesulitan mencari pasangan, circle pertemanan.</li>
                    <li>Belum tau arah dan tujuan &#40;filosofi hidup&#41;.</li>
                    <li>Insecure dan overthinking akan aset dan investasi masa depan.</li>
                </ul>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <div class="portfolio-container"></div>

    <!-- ======= Webinar Section ======= -->
    <section class="pricing">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Pilihan Webinar</h2>
                <p>Berinteraksi dan berdiskusi dengan pembicara ahli di bidangnya</p>
                <i style="color: #3498db;">klik gambar untuk mendaftar</i>
            </div>

            <div class="row portfolio-container justify-content-center" data-aos="fade-up" data-aos-delay="400">
                <?php
                $sql = "SELECT * FROM webinar";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app mb-4">
                        <div class="zoom">
                            <a href="app.php?page=form_webinar&id=<?= $row["id"] ?>">
                                <img src="../uploads/webinar/<?= $row["poster"] ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= About Konseling Section ======= -->
    <section id="konseling" class="about section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Konseling</h2>
            </div>

            <div class="content text-center" data-aos="fade-up" data-aos-delay="150">
                <p>
                    Konseling adalah layanan konsultasi dengan Mentor kami untuk mengatasi masalah
                    kehidupan yang mengganggu kehidupan sehari-hari dan membahayakan dirimu atau orang lain.
                </p>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Konseling Section ======= -->
    <section class="pricing">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Paket Konseling</h2>
                <p>Ceritakan dan cari tahu solusi masalahmu bersama Mentor</p>
            </div>

            <div class="row portfolio-container justify-content-center" data-aos="fade-up" data-aos-delay="400">
                <?php
                $sql = "SELECT * FROM konseling";
                $hasil = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($hasil)) {
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app mb-4">
                        <div class="zoom">
                            <a href="app.php?page=form_konseling&id=<?= $row["id"] ?>">
                                <img src="../uploads/konseling/<?= $row["poster"] ?>" class="img-fluid" alt="" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Hubungi Kami</h2>
            </div>

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-about">
                        <h3>Manusia Sehat</h3>
                        <p>Merupakan sebuah startup yang menjembatani antara orang yang memerlukan konseling dengan mentor terbaik.</p>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="offset-3 col-lg-3 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="info">
                        <div>
                            <i class="ri-map-pin-line"></i>
                            <p>Jl. Pangeran Jayakarta, Budirahayu 1 No.3<br>Jakarta Pusat 10730</p>
                        </div>

                        <div>
                            <i class="ri-mail-send-line"></i>
                            <p>humas@manusiasehat.com</p>
                        </div>

                        <div>
                            <i class="ri-phone-line"></i>
                            <p>&#40;021&#41; 30422800</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->