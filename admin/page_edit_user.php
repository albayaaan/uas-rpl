<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">User</h1>
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

        $sql = "SELECT * FROM user WHERE id=$id";
        $hasil = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($hasil);
        ?>
        <!-- end alert -->
        <div class="card mt-2 ">
            <div class="card-header">
                <i class="fas fa-add me-1"></i>
                Edit Data User
            </div>
            <div class="card-body">
                <form action="edit_user.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $row['name'] ?>" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $row['email'] ?>" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-4">
                                <label for="password" class="form-label">Email</label>
                                <input type="text" class="form-control" id="password" name="password" value="<?= $row['password'] ?>" required>
                            </div>
                        </div>
                    </div>
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