<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Webinar</h1>
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

        include 'connect.php';
        $id = $_GET['id'];

        $sql = "SELECT * FROM webinar WHERE id=$id";
        $hasil = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($hasil);
        ?>
        <!-- end alert -->
        <div class="card mt-2 ">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Edit Webinar
            </div>
            <div class="card-body">
                <form action="edit_webinar.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="row">
                        <div class="mb-3">
                            <label for="topik" class="form-label">Topik Webinar</label>
                            <input type="text" class="form-control" id="topik" name="topik" value="<?= $row['topik'] ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="jam" class="form-label">Jam Webinar</label>
                                <input type="time" class="form-control" id="jam" name="jam" value="<?= $row['jam'] ?>" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Webinar</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $row['tanggal'] ?>" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-4">
                                <label for="harga" class="form-label">Harga Webinar</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="<?= $row['harga'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-auto">
                            <label for="poster" class="form-label">Poster Webinar</label>
                            <input type="file" class="form-control" id="poster" name="poster">
                        </div>
                    </div> -->
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>