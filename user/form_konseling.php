<div style="max-height: 73vh; min-height: 73vh">
    <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
        <section id="form" class="form">
            <div class="container">

                <h3 class="text-center">Pendaftaran Konseling</h3>
                <form action="daftar_konseling.php" method="post" enctype="multipart/form-data">
                    <div class=" row mt-3">
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="konseling" required>
                                <option value="">--</option>
                                <?php
                                include "connect.php";
                                $id = $_GET["id"];
                                $sql = "SELECT * FROM konseling";
                                $hasil = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($hasil)) {
                                ?>
                                    <option value="<?= $row['id'] ?>" <?= $row['id'] == $id ? "selected" : "" ?>><?= $row['paket'] ?> - Rp <?= $row['harga'] > 1000 ? $row['harga'] / 1000 : $row['harga'] ?>.000</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" name="nama" value="<?= isset($_SESSION['post']) ? $_SESSION['post']['nama'] : "" ?>" required>
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" name="email" value="<?= isset($_SESSION['post']) ? $_SESSION['post']['email'] : "" ?>" required>
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingInput" name="noWa" value="<?= isset($_SESSION['post']) ? $_SESSION['post']['noWa'] : "" ?>" required>
                                    <label for="floatingInput">Nomor WhatsApp</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Default select example" name="gender" required>
                                    <option value="">--</option>
                                    <option value="laki-laki" <?= isset($_SESSION['post']) && $_SESSION['post']['gender'] == "laki-laki" ? "selected" : "" ?>>Laki - laki</option>
                                    <option value="perempuan" <?= isset($_SESSION['post']) && $_SESSION['post']['gender'] == "perempuan" ? "selected" : "" ?>>Perempuan</option>
                                </select>
                                <label for="floatingInput">Jenis Kelamin</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingInput" name="tgl_lahir" value="<?= isset($_SESSION['post']) ? $_SESSION['post']['tgl_lahir'] : "" ?>" required>
                                <label for="floatingInput">Tanggal Lahir</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Default select example" name="pembayaran" required>
                                    <option value="">--</option>
                                    <?php
                                    $sql = "SELECT * FROM pembayaran";
                                    $hasil = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($hasil)) {
                                    ?>
                                        <option value="<?= $row['id'] ?>" <?= isset($_SESSION['post']) && $_SESSION['post']['pembayaran'] == $row['id'] ? "selected" : "" ?>>Transfer <?= $row['transfer'] ?> - <?= $row['tujuan'] ?></option>
                                    <?php } ?>
                                </select>
                                <label for="floatingInput">Metode Pembayaran</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-auto">
                            <p class="text-muted">Bukti Pembayaran:</p>
                        </div>
                        <div class="col-auto">
                            <input class="form-control" type="file" id="formFile" name="bukti" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="offset-10 col-2 d-grid">
                            <button class="btn btn-primary">Daftar</button>
                        </div>
                    </div>
                </form>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
</div>